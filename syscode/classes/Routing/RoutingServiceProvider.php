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
 * @since       0.4.0
 */

namespace Syscode\Routing;

use Syscode\Support\ServiceProvider;
use Syscode\Contracts\Routing\RouteResponse as ResponseContract;

/**
 * For loading the classes from the container of services.
 * 
 * @author Javier Alexander Campo M. <jalexcam@gmail.com>
 */
class RoutingServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     * 
     * @return void
     */
    public function register()
    {
        $this->registerRouter();
        $this->registerRouteResolver();
        $this->registerRouteResponse();
        $this->registerUrlGenerator();
        $this->registerRedirector();
    }

    /**
     * Register the router instance.
     * 
     * @return void
     */
    protected function registerRouter()
    {
        $this->app->singleton('router', function ($app) {
            return new Router(null, $app['routeResolver']);
        });
    }

    /**
     * Register the route resolver service.
     * 
     * @return void
     */
    protected function registerRouteResolver()
    {
        $this->app->singleton('routeResolver', function () {
            return new RouteResolver;
        });
    }

    /**
     * Register the route response implementation.
     * 
     * @return void
     */
    protected function registerRouteResponse()
    {
        $this->app->singleton(ResponseContract::class, function($app) {
            return new RouteResponse($app['view'], $app['redirect']);
        });
    }

    /**
     * Register the URL generator service.
     * 
     * @return void
     */
    protected function registerUrlGenerator()
    {
        $this->app->singleton('url', function ($app) {
            return new UrlGenerator($app['request']);
        });
    }

    /**
     * Register the URL generator service.
     * 
     * @return void
     */
    protected function registerRedirector()
    {
        $this->app->singleton('redirect', function ($app) {
            return new Redirector($app['url']);
        });
    }
}