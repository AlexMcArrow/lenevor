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
 * @copyright   Copyright (c) 2019 Lenevor Framework 
 * @license     https://lenevor.com/license or see /license.md or see https://opensource.org/licenses/BSD-3-Clause New BSD license
 * @since       0.2.0
 */

namespace Syscode\Routing;

use Syscode\Support\Str;
use Syscode\Http\Request;
use InvalidArgumentException;

/**
 * Returns the URL generated by the user.
 * 
 * @author Javier Alexander Campo M. <jalexcam@gmail.com>
 */
class UrlGenerator
{
    /**
     * The force URL root.
     * 
     * @var string $forcedRoot 
     */
    protected $forcedRoot;

    /**
     * The force Schema for URLs.
     * 
     * @var string $forcedSchema
     */
    protected $forcedSchema;
     
    /**
     * The Request instance.
     * 
     * @var string $request
     */
    protected $request;

    /**
     * Constructor. The UrlGenerator class instance.
     * 
     * @param  \Syscode\Http\Request  $request
     * 
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->setRequest($request);
    }

    /**
     * Get the current URL for the request.
     * 
     * @return string
     */
    public function current()
    {
        return $this->to($this->request->getPathInfo());
    }

    /**
     * Get the URL for the previous request.
     * 
     * @param  mixed  $fallback
     * 
     * @return string
     */
    public function previuos($fallback = false)
    {
        $referer = $this->request->referer();

        $url = $referer ? $this->to($referer) : [];

        if ($url)
        {
            return $url;
        }
        elseif ($fallback)
        {
            return $this->to($fallback);
        }

        return $this->to('/');
    }

    /**
     * Generate a absolute URL to the given path.
     * 
     * @param  string     $path
     * @param  mixed      $options
     * @param  bool|null  $secure
     * 
     * @return string
     */
    public function to($path, $options = [], $secure = null)
    {
        // First we will check if the URL is already a valid URL. If it is we will not
        // try to generate a new one but will simply return the URL as is, which is
        // convenient since developers do not always have to check if it's valid.
        if ($this->isValidUrl($path))
        {
            return $path;
        }

        $scheme = $this->getScheme($secure);

        $tail = implode('/', array_map('rawurlencode', (array) $options));

        $root = $this->getRootUrl($scheme);

        return $this->trim($root, $path, $tail);
    }

    /**
     * Generate a secure, absolute URL to the given path.
     * 
     * @param  string  $path
     * @param  array   $parameters
     * 
     * @return string
     */
    public function secure($path, $parameters = [])
    {
        return $this->to($path, $parameters, true);
    }

    /**
     * Generate a URL to an application asset.
     * 
     * @param  string     $path
     * @param  bool|null  $secure  (null by default)
     * 
     * @return string
     */
    public function asset($path, $secure = null)
    {
        if ($this->isValidUrl($path))
        {
            return $path;
        }

        // Once we get the root URL, we will check to see if it contains an index.php
        // file in the paths. If it does, we will remove it since it is not needed
        // for asset paths, but only for routes to endpoints in the application.
        $root = $this->getRootUrl($this->getScheme($secure));

        return $this->removeIndex($root).'/'.trim($path, '/');
    }
    
    /**
     * Generate a URL to a secure asset.
     * 
     * @param  string
     * 
     * @return string
     */
    public function secureAsset($path)
    {
        return $this->asset($path, true);
    }

    /**
     * Remove the index.php file from a path.
     * 
     * @param  string  $root
     * 
     * @return string
     */
    protected function removeIndex($root)
    {
        $index = 'index.php';

        return Str::contains($root, $index) ? str_replace('/'.$index, '', $root) : $root;
    }

    /**
     * Get the scheme for a raw URL.
     * 
     * @param  bool|null  $secure
     * 
     * @return string
     */
    public function getScheme($secure)
    {
        if (is_null($secure))
        {
            return $this->forcedSchema ?: $this->request->getScheme().'://';
        }

        return $secure ? 'https://' : 'http://';
    }

    /**
     * Force the schema for URLs.
     * 
     * @param  string  $schema
     * 
     * @return void
     */
    public function forcedSchema($schema)
    {
        $this->forcedSchema = $schema.'://'; 
    }

    /**
     * Get the base URL for the request.
     * 
     * @param  string       $scheme
     * @param  string|null  $root
     * 
     * @return string
     */
    protected function getRootUrl($scheme, $root = null)
    {
        if (is_null($root))
        {
            $root = $this->forcedRoot ?: $this->request->root();
        }

        $begin = Str::startsWith($root, 'http://') ? 'http://' : 'https://';

        return preg_replace("~$begin~", $scheme, $root, 1);
    }

    /**
     * Set the forced root URL.
     * 
     * @param  string  $root
     * 
     * @return void
     */
    public function forcedRoot($root)
    {
        $this->forcedRoot = $root;
    }
    
    /**
     * Determine if the given path is a valid URL.
     * 
     * @param  string  $path
     * 
     * @return bool
     */
    public function isValidUrl($path)
    {
        if (Str::startsWith($path, ['#', '//', 'mailto:', 'tel:', 'http://', 'https://'])) 
        {
            return true;
        }
        
        return filter_var($path, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * Format the given URL segments into a single URL.
     * 
     * @param  string  $root
     * @param  string  $path
     * @param  string  $tail
     * 
     * @return string
     */
    protected function trim($root, $path, $tail = '')
    {
        return trim($root.'/'.trim($path.'/'.$tail, '/'), '/');
    }

    /**
     * Gets the Request instance.
     * 
     * @return \Syscode\Http\Request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Sets the current Request instance.
     * 
     * @param  \Syscode\Http\Request  $request
     * 
     * @return void
     */
    public function setRequest(Request $request)
    {
        $this->request = $request;
    }
}