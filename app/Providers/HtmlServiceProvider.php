<?php
/**
 * Created by PhpStorm.
 * User: ssandy
 * Date: 15-07-24
 * Time: 2:47 PM
 */

namespace App\Providers;

use App\Html\FormBuilder;
use App\Html\HtmlBuilder;
use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;


class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * @var \Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerHtmlBuilder();

        $this->registerFormBuilder();

        $this->app->alias('html', 'App\Html\HtmlBuilder');
        $this->app->alias('form', 'App\Html\FormBuilder');
    }

    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['url']);
        });
    }

    /**
     * Register the form builder instance.
     *
     * @return void
     */
    protected function registerFormBuilder()
    {
        $this->app->bindShared('form', function($app)
        {
            $form = new FormBuilder($app['html'], $app['url'], $app['session.store']->getToken());

            return $form->setSessionStore($app['session.store']);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('html', 'form', 'App\Html\HtmlBuilder', 'App\Html\FormBuilder');
    }
}
