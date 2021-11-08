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
 * @copyright   Copyright (c) 2019 - 2021 Alexander Campo <jalexcam@gmail.com>
 * @license     https://opensource.org/licenses/BSD-3-Clause New BSD license or see https://lenevor.com/license or see /license.md
 */

namespace Syscodes\Components\Cache\Store;

use Memcached;
use Syscodes\Components\Contracts\Cache\Store;
use Syscodes\Components\Support\InteractsWithTime;

/**
 * Memcached cache handler.
 * 
 * @author Alexander Campo <jalexcam@gmail.com>
 */
class MemcachedStore implements Store
{
    use InteractsWithTime;

    /**
     * The Memcached instance.
     * 
     * @var \Memcached $memcached
     */
    protected $memcached;

    /**
     * A string that should be prepended to keys.
     * 
     * @var string $prefix
     */
    protected $prefix;

    /**
     * Constructor. The new Memcached store instance.
     * 
     * @param  \Memcached  $memcached
     * @param  string  $prefix
     * 
     * @return void
     */
    public function __construct($memcached, $prefix = '')
    {
        $this->setPrefix($prefix);
        $this->memcached = $memcached;
    }

    /**
     * Destructor. Closes the connection to Memcache(d) if present.
     * 
     * @return void
     */
    public function __destruct()
    {
        if ($this->memcached instanceof Memcached) {
            $this->memcached->quit();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        $value = $this->memcached->get($this->prefix.$key);

        if ($this->memcached->getResultCode() == 0) {
            return $value;
        }
    }

    /**
     * Store an item in the cache if the key doesn't exist.
     * 
     * @param  string  $key
     * @param  mixed  $value
     * @param  int  $seconds
     * 
     * @return bool
     */
    public function add($key, $value, $seconds)
    {
        return $this->memcached->add($this->prefix.$key, $value, $this->calcExpiration($seconds));
    }

    /**
     * {@inheritdoc}
     */
    public function put($key, $value, $seconds)
    {
        return $this->memcached->set($this->prefix.$key, $value, $this->calcExpiration($seconds));
    }

    /**
     * {@inheritdoc}
     */
    public function increment($key, $value = 1)
    {
        return $this->memcached->increment($this->prefix.$key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function decrement($key, $value = 1)
    {
        return $this->memcached->decrement($this->prefix.$key, $value = 1);
    }

     /**
     * {@inheritdoc}
     */
    public function delete($key)
    {
        return $this->memcached->delete($this->prefix.$key);
    }

    /**
     * {@inheritdoc}
     */
    public function forever($key, $value)
    {
        return $this->put($this->prefix.$key, $value, 0);
    }

    /**
     * {@inheritdoc}
     */
    public function flush()
    {
        return $this->memcached->flush();
    }

    /**
     * Gets the Memcached connection.
     * 
     * @return \Memcached
     */
    public function getMemcached()
    {
        return $this->memcached;
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix()
    {
        return $this->prefix;
    }
    
    /**
     * Set the cache key prefix.
     * 
     * @param  string  $prefix
     * 
     * @return void
     */
    public function setPrefix($prefix)
    {
        $this->prefix = ! empty($prefix) ? $prefix.':' : '';
    }

    /**
     * Gets the expiration time of the key.
     * 
     * @param  int  $seconds
     * 
     * @return int
     */
    protected function calcExpiration($seconds)
    {
        return $this->toTimestamp($seconds);
    }

    /**
     * Gets the UNIX timestamp for the given number of seconds.
     * 
     * @param  int  $seconds
     * 
     * @return int
     */
    protected function toTimestamp($seconds)
    {
        return $seconds > 0 ? $this->availableAt($seconds) : 0;
    }
}