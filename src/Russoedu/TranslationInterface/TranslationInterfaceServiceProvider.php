<?php namespace Russoedu\TranslationInterface;

use Illuminate\Support\ServiceProvider;

class TranslationInterfaceServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('russoedu/translationinterface');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['translationinterface'] = $this->app->share(
            function ($app) {
                return new TranslationInterface;
            }
        );
        $this->app->booting(
            function () {
                $loader = \Illuminate\Foundation\AliasLoader::getInstance();
                $loader->alias('TranslationInterface', 'Russoedu\TranslationInterface\Facades\TranslationInterface');
            }
        );

        $this->app['command.translationinterface'] = $this->app->share(
            function ($app) {
                return new TranslationInterfaceCommand;
            }
        );
        $this->commands('command.translationinterface');


    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}