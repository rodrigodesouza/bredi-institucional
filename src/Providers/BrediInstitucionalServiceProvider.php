<?php

namespace Bredi\BrediInstitucional\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

class BrediInstitucionalServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerFactories();
        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->loadMenu();
    }

    public function loadMenu()
    {
        $this->app->booted(function() {
            
            if (isset($this->app['config']['bredidashboard']['menu'])) {

                $arr = $this->app['config']['bredidashboard']['menu'];
                
                $menu = [
                    [
                        'nome' => 'Quem Somos',
                        'link' => route('brediinstitucional::controle.quem-somos.edit')
                    ],
                    [
                        'nome' => 'Contatos Empresa',
                        'link' => route('brediinstitucional::controle.empresa-contato.edit')
                    ]
                ];
                    
                $this->app['config']->set('bredidashboard.menu', array_merge($arr, $menu));
            }
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            __DIR__.'/../Config/config.php' => config_path('brediinstitucional.php'),
        ], 'config');
        $this->mergeConfigFrom(
            __DIR__.'/../Config/config.php', 'brediinstitucional'
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/brediinstitucional');

        $sourcePath = __DIR__.'/../Resources/views';

        $this->publishes([
            $sourcePath => $viewPath
        ],'views');

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path . '/modules/brediinstitucional';
        }, \Config::get('view.paths')), [$sourcePath]), 'brediinstitucional');
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/brediinstitucional');

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, 'brediinstitucional');
        } else {
            $this->loadTranslationsFrom(__DIR__ .'/../Resources/lang', 'brediinstitucional');
        }
    }

    /**
     * Register an additional directory of factories.
     * 
     * @return void
     */
    public function registerFactories()
    {
        if (! app()->environment('production')) {
            app(Factory::class)->load(__DIR__ . '/../Database/factories');
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
