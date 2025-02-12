<?php 

/**
 * Lenevor Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file license.md.
 * It is also available through the world-wide-web at this URL:
 * https://lenevor.com/license
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@Lenevor.com so we can send you a copy immediately.
 *
 * @package     Lenevor
 * @subpackage  Base
 * @link        https://lenevor.com
 * @copyright   Copyright (c) 2019 - 2023 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

namespace Syscodes\Components\Database\Erostrine;

use Closure;
use BadMethodCallException;
use Syscodes\Components\Support\Str;
use Syscodes\Components\Support\Traits\Macroable;
use Syscodes\Components\Contracts\Support\Arrayable;
use Syscodes\Components\Support\Traits\ForwardsCalls;
use Syscodes\Components\Database\Concerns\MakeQueries;
use Syscodes\Components\Database\Erostrine\Relations\Relation;
use Syscodes\Components\Database\Query\Builder as QueryBuilder;
use Syscodes\Components\Database\Erostrine\Exceptions\ModelNotFoundException;
use Syscodes\Components\Database\Erostrine\Exceptions\RelationNotFoundException;

/**
 * Creates a Erostrine query builder.
 */
class Builder
{
    use MakeQueries,
        Macroable,
        ForwardsCalls;
    
    /**
     * The relationships that should be eagerly loaded by the query.
     * 
     * @var array $eagerLoad
     */
    protected $eagerLoad = [];

    /**
     * The model being queried.
     * 
     * @var \Syscodes\Components\Database\Erostrine\Model $model
     */
    protected $model;

    /**
     * The methods that should be returned from query builder.
     * 
     * @var array $passthru
     */
    protected $passthru = [
        'aggregate',
        'average',
        'avg',
        'count',
        'exists',
        'getBindings',
        'getConnection',
        'getGrammar',
        'insert',
        'insertGetId',
        'insertOrIgnore',
        'insertUsing',
        'max',
        'min',
        'raw',
        'sum',
        'toSql',
    ];

    /**
     * The query builder instance.
     * 
     * @var \Syscodes\Components\Database\Query\Builder $query
     */
    protected $query;

    /**
     * The relation tables to be instanced.
     * 
     * @var \Syscodes\Components\Database\Erostrine\Relations\Relation $relation
     */
    protected $relation;

    /**
     * Constructor. The new Holisen query builder instance.
     * 
     * @param  \Syscodes\Components\Database\query\Builder  $query
     * 
     * @return void
     */
    public function __construct(QueryBuilder $query)
    {
        $this->query = $query;
    }
    
    /**
     * Find a model by its primary key.
     * 
     * @param  mixed  $id
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static|array|null
     */
    public function find($id, array $columns = ['*'])
    {
        if (is_array($id) || $id instanceof Arrayable) {
            return $this->findMany($id, $columns);
        }

        return $this->whereClauseKey($id)->first($columns);
    }
    
    /**
     * Find a model by its primary key.
     * 
     * @param  array  $ids
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|Collection|static
     */
    public function findMany($ids, array $columns = ['*'])
    {
        $ids = $ids instanceof Arrayable ? $ids->toArray() : $ids;

        if (empty($ids)) {
            return $this->model->newCollection();
        }

        return $this->whereClauseKey($ids)->get($columns);
    }

    /**
     * Add a where clause on the primary key to the query.
     * 
     * @param  mixed  $id
     * 
     * @return static
     */
    public function whereClauseKey($id): static
    {
        if ($id instanceof Model) {
            $id = $id->getKey();
        }

        $keyName = $this->model->getQualifiedKeyName();

        if (is_array($id) || $id instanceof Arrayable) {
            $this->query->whereIn($keyName, $id);

            return $this;
        }

        return $this->where($keyName, '=', $id);
    }

    /**
     * Add a basic where clause to the query.
     * 
     * @param  \Closure|string|array|\Syscodes\Component\Database\Query\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * 
     * @return static
     */
    public function where($column, $operator = null, $value = null, $boolean = 'and'): static
    {
        if ($column instanceof Closure && is_null($operator)) {
            $column($query = $this->model->newQuery());
            
            $this->query->addNestedWhereQuery($query->getQuery(), $boolean);
        } else {
            $this->query->where(...func_get_args());
        }

        return $this;
    }
    
    /**
     * Add a basic where clause to the query, and return the first result.
     * 
     * @param  \Closure|string|array|\Syscodes\Components\Database\Query\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static|null
     */
    public function firstWhere($column, $operator = null, $value = null, $boolean = 'and')
    {
        return $this->where(...func_get_args())->first();
    }
    
    /**
     * Add a basic "where not" clause to the query.
     * 
     * @param  \Closure|string|array|\Syscodes\Components\Database\Query\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * @param  string  $boolean
     * 
     * @return static
     */
    public function whereNot($column, $operator = null, $value = null, $boolean = 'and'): static
    {
        return $this->where($column, $operator, $value, $boolean.' not');
    }
    
    /**
     * Add an "or where not" clause to the query.
     * 
     * @param  \Closure|array|string|\Syscodes\Components\Database\Query\Expression  $column
     * @param  mixed  $operator
     * @param  mixed  $value
     * 
     * @return static
     */
    public function orWhereNot($column, $operator = null, $value = null): static
    {
        return $this->whereNot($column, $operator, $value, 'or');
    }
    
    /**
     * Find a model by its primary key or throw an exception.
     * 
     * @param  mixed  $id
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|\Syscodes\Components\Database\Erostrine\Collection|static|static[]
     * 
     * @throws \Syscodes\Components\Database\Erostrine\Exceptions\ModelNotFoundException
     */
    public function findOrFail($id, array $columns = ['*'])
    {
        $model = $this->find($id, $columns);

        $id = $id instanceof Arrayable ? $id->toArray() : $id;

        $className = get_class($this->model);

        if (is_array($id)) {
            if (count($model) !== count(array_unique($id))) {
                throw (new ModelNotFoundException)->setModel($className);
            }
            
            return $model;
        } 
        
        if (is_null($model)) {
            throw (new ModelNotFoundException)->setModel($className);
        }
        
        return $model;
    }
    
    /**
     * Find a model by its primary key or return fresh model instance.
     * 
     * @param  mixed  $id
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Eloquent\Model|static
     */
    public function findOrNew($id, $columns = ['*'])
    {
        if ( ! is_null($model = $this->find($id, $columns))) {
            return $model;
        }
        
        return $this->newModelInstance();
    }
    
    /**
     * Get the first record matching the attributes or instantiate it.
     * 
     * @param  array  $attributes
     * @param  array  $values
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static
     */
    public function firstOrNew(array $attributes = [], array $values = [])
    {
        if ( ! is_null($instance = $this->where($attributes)->first())) {
            return $instance;
        }
        
        return $this->newModelInstance(array_merge($attributes, $values));
    }
    
    /**
     * Get the first record matching the attributes or create it.
     * 
     * @param  array  $attributes
     * @param  array  $values
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static
     */
    public function firstOrCreate(array $attributes = [], array $values = [])
    {
        if ( ! is_null($instance = $this->where($attributes)->first())) {
            return $instance;
        }
        
        return take($this->newModelInstance(array_merge($attributes, $values)), function ($instance) {
            $instance->save();
        });
    }
    
    /**
     * Create or update a record matching the attributes, and fill it with values.
     * 
     * @param  array  $attributes
     * @param  array  $values
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static
     */
    public function updateOrCreate(array $attributes, array $values = [])
    {
        return take($this->firstOrNew($attributes), fn ($instance) => $instance->fill($values)->save());
    }

    /**
     * Execute the query and get the first result or throw an exception.
     *
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static
     *
     * @throws \Syscodes\Components\Database\Erostrine\Exceptions\ModelNotFoundException
     */
    public function firstOrFail($columns = ['*'])
    {
        if ( ! is_null($model = $this->first($columns))) {
            return $model;
        }

        $className = get_class($this->model);

        throw (new ModelNotFoundException)->setModel($className);
    }

    /**
     * Execute the query as a "select" statement.
     *
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Erostrine\Collection|static[]
     */
    public function get($columns = ['*'])
    {   
        $builder = $this->applyScopes();

        if (count($models = $builder->getModels($columns)) > 0) {
            $models = $builder->eagerLoadRelations($models);
        }

        return $builder->getModel()->newCollection($models);
    }
    
    /**
     * Get the hydrated models.
     * 
     * @param  array  $columns
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model[]
     */
    public function getModels($columns = ['*'])
    {
        return $this->model->hydrate(
            $this->query->get($columns)->all()
        )->all();
    }
    
    /**
     * Create a collection of models from plain arrays.
     * 
     * @param  array  $items
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model[]
     */
    public function hydrate(array $items)
    {
        $instance = $this->newModelInstance();
        
        return $instance->newCollection(array_map(fn ($item) => $instance->newFromBuilder($item), $items));
    }
    
    /**
     * Save a new model and return the instance.
     *
     * @param  array  $attributes
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|$this
     */
    public function create(array $attributes = [])
    {
        return take($this->newModelInstance($attributes), fn ($instance) => $instance->save());
    }

    /**
     * Eager load the relationships for the models.
     * 
     * @param  array  $models
     * 
     * @return array
     */
    public function eagerLoadRelations(array $models): array
    {
        foreach ($this->eagerLoad as $name => $constraints) {
            if ( ! Str::contains($name, '.')) {
                $models = $this->eagerloadRelation($models, $name, $constraints);
            }
        }

        return $models;
    }

    /**
     * Eagerly load the relationship on a set of models.
     * 
     * @param  array  $models
     * @param  string  $name
     * @param  \Closure|null  $constraints
     * 
     * @return array
     */
    protected function eagerLoadRelation(array $models, string $name, Closure $constraints = null): array
    {
        $relation = $this->getRelation($name);

        $relation->addEagerConstraints($models);

        is_null($constraints) ? $constraints : $constraints($relation);

        return $relation->match(
            $relation->initRelation($models, $name),
            $relation->getEager(),
            $name
        );
    }

    /**
     * Get the relation instance for the given relation name.
     * 
     * @param  string  $name
     * 
     * @return \Syscodes\Components\Database\Erostrine\Relations\Relation
     * 
     * @throws \BadMethodCallException
     * @throws \Syscodes\Components\Database\Erostrine\Exceptions\RelationNotFoundException
     */
    protected function getRelation($name)
    {
        $relation = Relation::noConstraints(function () use ($name) {
            try {
                return $this->getModel()->newInstance()->$name();
            } catch (BadMethodCallException $e) {
                throw RelationNotFoundException::make($this->getModel(), $name);
            }
        });

        $nested = $this->nestedRelations($name);

        if (count($nested) > 0) {
            $relation->getQuery()->with($nested);
        }

        return $relation;
    }

    /**
     * Gather the nested includes for a given relationship.
     * 
     * @param  string  $relation
     * 
     * @return array
     */
    protected function nestedRelations($relation): array
    {
        $nested = [];

        foreach ($this->eagerLoad as $name => $constraints) {
            if ($this->isNested($relation, $name)) {
                $key = substr($name, strlen($relation.'.'));

                $nested[$key] = $constraints;
            }
        }

        return $nested;
    }

    /**
     * Determine if the relationship is nested.
     * 
     * @param  string  $relation
     * @param  string  $name
     * 
     * @return bool
     */
    protected function isNested($relation, $name): bool
    {
        return Str::contains($name, '.') && Str::startsWith($name, $relation.'.');
    }

    /**
     * Set the relationships that should be eager loaded.
     * 
     * @param  string|array  $relations
     * @param  string|\Closure|null  $callback
     * 
     * @return static
     */
    public function with($relations, $callback = null): static
    {
        if ($callback instanceof Closure) {
            $eagers = $this->parseWithRelations([$relations => $callback]);
        } else {
            $eagers = $this->parseWithRelations(is_string($relations) ? func_get_args() : $relations);
        }

        $this->eagerLoad = array_merge($this->eagerLoad, $eagers);

        return $this;
    }

    /**
     * Get the eagerly loaded relationships for the model.
     * 
     * @param  array  $relations
     * 
     * @return array
     */
    protected function parseWithRelations(array $relations): array
    {
        $results = [];

        foreach ($relations as $name => $constraints) {
            if (is_numeric($name)) {
                [$name, $constraints] = [$constraints, null];
            }

            $results[$name] = $constraints;
        }

        return $results;
    }

    /**
     * Apply the scopes to the Eloquent builder instance and return it.
     * 
     * @return static
     */
    public function applyScopes()
    {
        $builder = clone $this;

        return $builder;
    }

    /**
     * Get the query builder instance.
     * 
     * @return \Syscodes\Components\Database\Query\Builder
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Set the query builder instance.
     * 
     * @param  \Syscodes\Components\Database\Query\Builder  $builder
     * 
     * @return static
     */
    public function setQuery($builder): static
    {
        $this->query = $builder;

        return $this;
    }

    /**
     * Get the model instance.
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the model instance.
     * 
     * @param  \Syscodes\Components\Database\Erostrine\Model  $model
     * 
     * @return static
     */
    public function setModel(Model $model): static
    {
        $this->model = $model;

        $this->query->from($model->getTable());

        return $this; 
    }

    /**
     * Set a master relation instance.
     * 
     * @param  \Syscodes\Components\Database\Erostrine\Relations\Relation  $relation
     * 
     * @return static
     */
    public function setRelation(Relation $relation): static
    {
        $this->relation = $relation;

        return $this;
    }
    
    /**
     * Create a new instance of the model being queried.
     * 
     * @param  array  $attributes
     * 
     * @return \Syscodes\Components\Database\Erostrine\Model|static
     */
    public function newModelInstance($attributes = [])
    {
        return $this->model->newInstance($attributes)->setConnection(
            $this->query->getConnection()->getName()
        );
    }

    /**
     * Magic method.
     * 
     * Dynamically handle method calls into the Builder instance.
     * 
     * @param  string  $method
     * @param  array  $parameters
     * 
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        if (static::hasMacro($method)) {
            $macro = static::$macros[$method];
            
            if ($macro instanceof Closure) {
                $macro = $macro->bindTo($this, static::class);
            }
            
            return call_user_func_array($macro, $parameters);
        }

        if (in_array($method, $this->passthru)) {
            return $this->getQuery()->{$method}(...$parameters);
        }
        
        $this->forwardCallTo($this->getQuery(), $method, $parameters);

        return $this;
    }

    /**
     * Magic method.
     * 
     * Dynamically handle method calls into the Builder instance.
     * 
     * @param  string  $method
     * @param  array  $parameters
     * 
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        if ( ! static::hasMacro($method)) {
            static::badMethodCallEcxeption($method);
        }

        $macro = static::$macros[$method];
            
        if ($macro instanceof Closure) {
            $macro = $macro->bindTo(null, static::class);
        }
        
        return call_user_func_array($macro, $parameters);        
    }
    
    /**
     * Magic method.
     * 
     * Force a clone of the underlying query builder when cloning.
     * 
     * @return void
     */
    public function __clone()
    {
        $this->query = clone $this->query;
    }
}