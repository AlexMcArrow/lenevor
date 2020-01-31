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
 * @author      Javier Alexander Campo M. <jalexcam@gmail.com>
 * @link        https://lenevor.com 
 * @copyright   Copyright (c) 2019-2020 Lenevor Framework 
 * @license     https://lenevor.com/license or see /license.md or see https://opensource.org/licenses/BSD-3-Clause New BSD license
 * @since       0.4.0
 */

namespace Syscode\Log;

use Psr\Log\LoggerInterface;
use Syscode\Contracts\Log\Handler;
use Syscode\Log\Handlers\FileLogger;
use Syscode\Log\Exceptions\LogException;

/**
 * The Lenevor Logger of errors.
 * 
 * @author Javier Alexander Campo M. <jalexcam@gmail.com>
 */
class LogManager implements LoggerInterface
{
    /**
     * The array of resolved logges.
     * 
     * @var array $logges
     */
    protected $logges = [];

    /**
     * Constructor. The LogManager class instance.
     * 
     * @param  \Syscode\Contracts\Core\Application  $app
     * 
     * @return void
     */
    public function __construct($app)
    {
        $this->app = $app;
    }

    /**
     * Get a log driver instance.
     * 
     * @param  string|null  $driver  (null by default)
     * 
     * @return mixed
     */
    public function driver($driver = null)
    {
        return $this->store($driver);
    }
    
    /**
     * Get a log store instance by name.
     * 
     * @param  string|null  $name
     * 
     * @return \Psr\Log\LoggerInterface
     */
    public function store(string $name = null)
    {
        $name = $name ?: $this->getDefaultDriver();

        return $this->logges[$name] = $this->get($name);
    }

    /**
     * Get the log from the local cache.
     * 
     * @param  string  $name
     * 
     * @return \Psr\Log\LoggerInterface
     */
    public function get($name)
    {
        return $this->logges[$name] ?? $this->resolve($name);
    }

    /**
     * Resolve the given log.
     * 
     * @param  string  $name
     * 
     * @return \Psr\Log\LoggerInterface
     * 
     * @throws \Syscode\Log\Exceptions\LogException
     */
    protected function resolve($name)
    {
        $config = $this->configurationLogger($name);

        if (is_null($config))
        {
            throw new LogException(__('logger.LogNotDefined', ['name' => $name]));
        }

        $driver = 'create'.ucfirst($config['driver']).'Driver';
    
        if (method_exists($this, $driver))
        {
            return $this->{$driver}($config);
        }
        
        throw new LogException(__('logger.driverNotSupported', ['config' => $config]));
    }

    /**
     * Get the log connection configuration.
     * 
     * @param  string  $name
     * 
     * @return array
     */
    protected function configurationLogger(string $name)
    {
        return $this->app['config']->get("logger.handlers.{$name}");
    }

    /**
     * Create an instance of the File log driver.
     * 
     * @param  array  $config
     * 
     * @return \Psr\Log\LoggerInterface
     */
    protected function createFileDriver(array $config)
    {
        return $this->getLogger(new FileLogger($config));
    }

    /**
     * Create a new log with the given implementation.
     * 
     * @param  \Syscode\Contracts\Log\Handler  $logger
     *
     * @return \Syscode\Contracts\Log\Handler
     */
    public function getLogger(Handler $logger)
    {
        return new Logger($logger);
    }

    /**
     * Get the default log driver name.
     * 
     * @return array
     */
    public function getDefaultDriver()
    {
        return $this->app['config']->get('logger.default');
    }
    
    /**
     * Set the default log driver name.
     * 
     * @param  string  $name
     * 
     * @return array
     */
    public function setDefaultDriver(string $name)
    {
        $this->app['config']->set('logger.default', $name);
    }

    /**
     * Action must be taken immediately.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function alert($message, array $context = [])
    {
        $this->driver()->alert($message, $context);
    }

    /**
     * Critical conditions.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function critical($message, array $context = [])
    {
        $this->driver()->critical($message, $context);
    }

    /**
     * Detailed debug information.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function debug($message, array $context = [])
    {
        $this->driver()->debug($message, $context);
    }

    /**
     * System is unusable.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function emergency($message, array $context = [])
    {
        $this->driver()->emergency($message, $context);
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function error($message, array $context = [])
    {
        $this->driver()->error($message, $context);
    }

    /**
     * Interesting events.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function info($message, array $context = [])
    {
        $this->driver()->info($message, $context);
    }

    /**
     * Normal but significant events.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function notice($message, array $context = [])
    {
        $this->driver()->notice($message, $context);
    }

    /**
     * Exceptional occurrences that are not errors.
     * 
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function warning($message, array $context = [])
    {
        $this->driver()->warning($message, $context);
    }

    /**
     * Log a message to the logs.
     * 
     * @param  string  $level
     * @param  string  $message
     * @param  array  $context
     * 
     * @return void
     */
    public function log($level, $message, array $context = [])
    {
        $this->driver()->log($level, $message, $context);
    }

    /**
     * Dynamically call the default driver instance.
     * 
     * @param  string  $method
     * @param  array  $parameters
     * 
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->driver()->{$method}(...$parameters);
    }
}