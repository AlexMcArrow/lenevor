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
 * @since       0.4.1
 */

//use RuntimeException;
use Syscode\Core\Application;
use Syscode\Routing\UrlGenerator;
use Syscode\Support\Facades\Date;
use Syscode\Contracts\View\Parser;
use Syscode\Support\Facades\Facade;
use Syscode\Contracts\Routing\RouteResponse;

if ( ! function_exists('abort')) 
{
    /**
     * Throw an HttpException with the given data.
     *
     * @param  int     $code
     * @param  string  $message
     * @param  array   $headers
     * 
     * @return void
     *
     * @throws \Syscode\Core\Http\Exceptions\HttpException
     * @throws \Syscode\Core\Http\Exceptions\LenevorException
     */
    function abort($code, $message = '', array $headers = [])
    {
        return app()->abort($code, $message, $headers);
    }
}

if ( ! function_exists('app')) 
{
    /**
     * Get the available Application instance or a Facade class instance.
     *
     * @param  string  $id
     * @param  array   $parameters
     * 
     * @return \Syscode\Core\Application|\Syscode\Support\Facades\Facade
     */
    function app($id = null, $parameters = [])
    {
        if ( ! is_null($id))
        {
            return Application::getInstance()->make($id, $parameters);
        }

        return Facade::getFacadeApplication();
    }
}

if ( ! function_exists('asset')) 
{
    /**
     * Generate an asset path for the application.
     * 
     * @param  string  $path
     * @param  bool    $secure
     * 
     * @return string
     */
    function asset($path, $secure = null)
    {
        return app('url')->asset($path, $secure);
    }
}

if ( ! function_exists('back')) 
{
    /**
     * Create a new redirect response to the previous location.
     * 
     * @param  int    $status    (302 by default)
     * @param  array  $headers
     * @param  mixed  $fallback  (false by default)
     * 
     * @return \Syscode\Http\RedirectResponse
     */
    function back($status = 302, $headers = [], $fallback = false)
    {
        return app('redirect')->back($status, $headers, $fallback);
    }
}

if ( ! function_exists('basePath')) 
{
    /**
     * Get the path to the base of the install.
     *
     * @param  string  $path
     * 
     * @return string
     */
    function basePath($path = '')
    {
        return app()->basePath($path);
    }
}

if ( ! function_exists('cache'))
{
    /**
     * Get / set the specified cache value.
     *
     * If an array is passed, we'll assume you want to put to the cache.
     *
     * @param  dynamic  key|key,default|data,expiration|null
     * @return mixed|\Illuminate\Cache\CacheManager
     *
     * @throws \Exception
     */
    function cache()
    {
        $arguments = func_get_args();
        
        if (empty($arguments))
        {
            return app('cache');
        }
        
        if (is_string($arguments[0]))
        {
            return app('cache')->get(...$arguments);
        }
        
        if ( ! is_array($arguments[0]))
        {
            throw new Exception('When setting a value in the cache, you must pass an array of key / value pairs.');
        }
        
        if ( ! isset($arguments[1]))
        {
            throw new Exception('You must specify an expiration time when setting a value in the cache.');
        }
        
        return app('cache')->put(key($arguments[0]), reset($arguments[0]), $arguments[1]);
    }
}

if ( ! function_exists('config'))
{
    /**
     * Get / set the specified configuration value.
     * If an array is passed as the key, we will assume you want to set 
     * an array of values.
     *
     * @param   array|string  $key
     * @param   mixed         $default
     *
     * @return  mixed|\Syscode\Config\Configure
     */
    function config($key = null, $value = null)
    {
        if ($key === null)
        {
            return app('config');
        }

        if (is_array($key))
        {
            return app('config')->set($key, $value);
        }
        
        return app('config')->get($key, $value);
    }
}

if ( ! function_exists('csrfField'))
{
    /**
     * Generate a CSRF token form field.
     * 
     * @return string
     */
    function csrfField()
    {
        return '<input type="hidden" name="_token" value="'.csrfToken().'">';
    }
}

if ( ! function_exists('csrfToken'))
{
    /**
     * Get the CSRF token value.
     * 
     * @return string
     * 
     * @throws \RuntimeException
     */
    function csrfToken()
    {
        $session = app('session');
        
        if (isset($session))
        {
            return $session->token();
        }

        throw new RuntimeException('Application session store not set.');
    }
}

if ( ! function_exists('decrypt'))
{
    /**
     * Decrypt the given value.
     * 
     * @param  mixed  $value
     * @param  bool   $unserialize  (true by default)
     * 
     * @return string
     */
    function decrypt($value, $unserialize = true)
    {
        return app('encrypter')->decrypt($value, $unserialize);
    }
}

if ( ! function_exists('e'))
{
    /**
     * Escape HTML entities in a string.
     *
     * @param  string  $value
     *
     * @return string
     */
    function e($value)
    {
        return htmlentities($value, ENT_QUOTES, 'UTF-8', false);
    }
}

if ( ! function_exists('encrypt'))
{
    /**
     * Encrypt the given value.
     * 
     * @param  mixed  $value
     * @param  bool   $serialize  (true by default)
     * 
     * @return string
     */
    function encrypt($value, $serialize = true)
    {
        return app('encrypter')->encrypt($value, $serialize);
    }
}

if ( ! function_exists('getClass'))
{
    /**
     * Function to crop the full name of the namespace and leave 
     * only the name of the class.
     * 
     * @param  string  $classname
     * @param  bool    $bool       (false by default)
     * 
     * @return array
     */
    function getClass($classname, $bool = false)
    {
        $position = explode('\\', get_class($classname));
        
        return ! $bool ? array_pop($position) : get_class($classname);
    }
}

if ( ! function_exists('isGetCommonPath'))
{
    /**
     * Find the common "root" path of two given paths or FQFN's.
     * 
     * @param  array   $paths  Array with the paths to compare
     * 
     * @return string  The determined common path section
     */
    function isGetCommonPath($paths)
    {
        $lastOffset = 1;
        $common     = '/';
        
        while (($index = strpos($paths[0], '/', $lastOffset)) !== false)
        {
            $dirLen = $index - $lastOffset + 1; // include
            $dir = substr($paths[0], $lastOffset, $dirLen);
            
            foreach ($paths as $path)
            {
                if (substr($path, $lastOffset, $dirLen) != $dir)
                {
                    return $common;
                }
            }
            
            $common    .= $dir;
            $lastOffset = $index + 1;
        }
        
        return $common;
    }
}

if ( ! function_exists('isImport'))
{
    /**
     * Loads in a core class and optionally an app class override if it exists.
     * 
     * @param  string  $path
     * @param  string  $folder
     * @return void
     */
    function isImport($path, $folder = 'classes')
    {
        $path = str_replace('/', DIRECTORY_SEPARATOR, $path);
        
        // load it ffrom the core if it exists
        if (is_file(SYS_PATH.$folder.DIRECTORY_SEPARATOR.$path.'.php'))
        {
            require_once SYS_PATH.$folder.DIRECTORY_SEPARATOR.$path.'.php';
        }
        
        // if the app has an override (or a non-core file), load that too
        if (is_file(APP_PATH.$folder.DIRECTORY_SEPARATOR.$path.'.php'))
        {
            require_once APP_PATH.$folder.DIRECTORY_SEPARATOR.$path.'.php';
        }
    }
}

if ( ! function_exists('now'))
{
    /**
     * Create a new Chronos class instance for the current time.
     * 
     * @param  \DateTimeZone|string|null  $timezone
     * 
     * @return \Syscode\Support\Chronos
     */
    function now($timezone = null)
    {
        return Date::now($timezone);
    }
}

if ( ! function_exists('redirect'))
{
    /**
     * Get an instance of the redirect.
     *
     * @param  string|null  $url      The url                        (null by default)
     * @param  int          $code     The redirect status code       (302 by default)
     * @param  array        $headers  An array of headers
     * @param  bool|null    $secure   Type of protocol (http|https)  (null by default)
     *
     * @return \Syscode\Routing\Redirector
     */
    function redirect($url = null, $code = 302, $headers = [], $secure = null)
    {
        if (null === $url)
        {
            return app('redirect');
        }
        
        return app('redirect')->to($url, $code, $headers, $secure);
    }
}

if ( ! function_exists('request'))
{
    /**
     * Get an instance of the current request or an input item from the request.
     * 
     * @param  array|string|null  $key      (null by default)
     * @param  mixed              $default  (null by default)
     * 
     * @return \Syscode\Http\Request|string|array 
     */
    function request($key = null, $default = null)
    {
        if (null === $key)
        {
            return app('request');
        }

        $value = app('request')->__get($key);

        return null === $value ? value($default) : $value;
    }
}

if ( ! function_exists('response')) 
{
    /**
     * Return a new Response from the application.
     *
     * @param  string  $body
     * @param  int     $status   (200 by default)
     * @param  array   $headers
     * 
     * @return \Syscode\Http\Response|\Syscode\Routing\RouteResponse
     */
    function response($body = '', $status = 200, array $headers = [])
    {
        $response = app(RouteResponse::class);

        if (func_num_args() === 0) 
        {
            return $response;
        }

        return $response->make($body, $status, $headers);
    }
}

if ( ! function_exists('resourcePath')) 
{
    /**
     * Get the path to the resources folder.
     *
     * @param  string  $path
     * 
     * @return string
     */
    function resourcePath($path = '')
    {
        return app()->resourcePath($path);
    }
}

if ( ! function_exists('secureAsset'))
{
    /**
     * Generate an asset path for the application.
     * 
     * @param  string  $path
     * 
     * @return string
     */
    function secureAsset($path)
    {
        return asset($path, true);
    }
}

if ( ! function_exists('secureUrl'))
{
    /**
     * Generate a HTTPS URL for the application.
     * 
     * @param  string  $path
     * @param  array   $parameters
     * 
     * @return string
     */
    function secureUrl($path, $parameters = [])
    {
        return url($path, $parameters, true);
    }
}

if ( ! function_exists('session'))
{
    /**
     * Get / set the specified session value.
     * 
     * @param  string  $key      (null by default)
     * @param  mixed   $default  (null by default)
     * 
     * @return mixed|\Syscode\Session\Store|\Syscode\Session\SessionManager
     */
    function session($key = null, $default = null)
    {
        if (is_null($key))
        {
            return app('session');
        }

        if (is_array($key))
        {
            return app('session')->put($key, $default);
        }

        return app('session')->get($key, $default);
    }
}

if ( ! function_exists('segment'))
{
  /**
     * Returns the desired segment, or $default if it does not exist.
     *
     * @param  int    $segment  
     * @param  mixed  $default  (null by default)
     *
     * @return string
     */
    function segment($index, $default = null)
    {
        return request()->segment($index, $default);
    }
}

if ( ! function_exists('segments'))
{
  /**
     * Returns all segments in an array.
     *
     * @return array
     */
    function segments()
    {
        return request()->segments();
    }
}

if ( ! function_exists('storagePath')) 
{
    /**
     * Get the path to the storage folder.
     *
     * @param  string  $path
     * 
     * @return string
     */
    function storagePath($path = '')
    {
        return app('path.storage').($path ? DIRECTORY_SEPARATOR.$path : $path);
    }
}

if ( ! function_exists('totalSegments'))
{
  /**
     * Returns the total number of segment.
     *
     * @return int
     */
    function totalSegments()
    {
        return request()->totalSegments();
    }
}

if ( ! function_exists('__'))
{
    /**
     * A convenience method to translate a string and format it
     * with the intl extension's MessageFormatter object.
     * 
     * @param  string  $line
     * @param  array   $args
     * 
     * @return string
     */
    function __($line, array $args = [])
    {
        return app('translator')->getLine($line, $args);
    }
}

if ( ! function_exists('url'))
{
    /**
     * Generate a URL for the application.
     *
     * @param  string|null  $path        (null by default)
     * @param  array        $parameters
     * @param  bool|null    $secure      (null by default)
     *
     * @return string
     */
    function url($path = null, $parameters = [], $secure = null)
    {
        if (is_null($path)) 
        {
            return app(UrlGenerator::class);
        }

        return app(UrlGenerator::class)->to($path, $parameters, $secure);
    }
}

if ( ! function_exists('view'))
{
    /**
     * Returns a new View object. If you do not define the "file" parameter, 
     * you must call [$this->view].
     *
     * @example $view->make($file, $data);
     *  
     * @param  string|null  $file       View filename
     * @param  array        $data       Array of values
     * 
     * @return void
     */
    function view($file = null, $data = [])
    {
        $view = app(Parser::class);

        if (func_num_args() === 0) 
        {
            return $view;
        }

        return $view->make($file, $data);
    }
}