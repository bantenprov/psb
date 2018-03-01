<?php namespace Bantenprov\Psb;

use Illuminate\Support\ServiceProvider;
use Bantenprov\Psb\Console\Commands\PsbCommand;

/**
 * The PsbServiceProvider class
 *
 * @package Bantenprov\Psb
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PsbServiceProvider extends ServiceProvider
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
        // Bootstrap handles
        $this->routeHandle();
        $this->configHandle();
        $this->langHandle();
        $this->viewHandle();
        $this->assetHandle();
        $this->migrationHandle();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dashboard-tanara-statistic', function ($app) {
            return new Psb;
        });

        $this->app->singleton('command.dashboard-tanara-statistic', function ($app) {
            return new PsbCommand;
        });

        $this->commands('command.dashboard-tanara-statistic');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'dashboard-tanara-statistic',
            'command.dashboard-tanara-statistic',
        ];
    }

    /**
     * Loading package routes
     *
     * @return void
     */
    protected function routeHandle()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');
    }

    /**
     * Loading and publishing package's config
     *
     * @return void
     */
    protected function configHandle()
    {
        $packageConfigPath = __DIR__.'/config/config.php';
        $appConfigPath     = config_path('dashboard-tanara-statistic.php');

        $this->mergeConfigFrom($packageConfigPath, 'dashboard-tanara-statistic');

        $this->publishes([
            $packageConfigPath => $appConfigPath,
        ], 'config');
    }

    /**
     * Loading and publishing package's translations
     *
     * @return void
     */
    protected function langHandle()
    {
        $packageTranslationsPath = __DIR__.'/resources/lang';

        $this->loadTranslationsFrom($packageTranslationsPath, 'dashboard-tanara-statistic');

        $this->publishes([
            $packageTranslationsPath => resource_path('lang/vendor/dashboard-tanara-statistic'),
        ], 'lang');
    }

    /**
     * Loading and publishing package's views
     *
     * @return void
     */
    protected function viewHandle()
    {
        $packageViewsPath = __DIR__.'/resources/views';

        $this->loadViewsFrom($packageViewsPath, 'dashboard-tanara-statistic');

        $this->publishes([
            $packageViewsPath => resource_path('views/vendor/dashboard-tanara-statistic'),
        ], 'views');
    }

    /**
     * Publishing package's assets (JavaScript, CSS, images...)
     *
     * @return void
     */
    protected function assetHandle()
    {
        $packageAssetsPath = __DIR__.'/resources/assets';

        $this->publishes([
            $packageAssetsPath => resource_path('/assets'),
        ], 'dtstatistik-assets');
    }

    /**
     * Publishing package's migrations
     *
     * @return void
     */
    protected function migrationHandle()
    {
        $packageMigrationsPath = __DIR__.'/database/migrations';

        $this->loadMigrationsFrom($packageMigrationsPath);

        $this->publishes([
            $packageMigrationsPath => database_path('migrations')
        ], 'migrations');
    }
}
