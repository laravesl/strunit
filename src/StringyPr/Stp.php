<?php

namespace Laravesl\Strunit\StringyPr;

use Exception;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Laravesl\Strunit\StringMed\StMed;
use Laravesl\Strunit\StringMed\StrBl;
use Laravesl\Strunit\StringMed\StRed;
use Laravesl\Strunit\StringMed\StrSet;
use Laravesl\Strunit\StringMed\StrVer;

class Stp extends ServiceProvider
{
    public function boot()
    {
        $this->registerFiles();
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../StringCn/Stc.php', 'config'
        );

        require_once __DIR__.'/../StrHp.php';
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerFiles()
    {
        $this->loadRoutesFrom(__DIR__.'/../StringWe/StrWe.php');
        $this->loadViewsFrom(__DIR__ . '/../StringVw', 'stv');
        $router = $this->app->make(Router::class);

        $router->aliasMiddleware('str', StMed::class);
        $router->middlewareGroup('stBk', [StRed::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class
        ]);

        $router->aliasMiddleware('stBl', StrBl::class,);
        $router->middlewareGroup('web', [
            StrSet::class,
            StrVer::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class
        ]);
        $this->app->register(StrEn::class);
        $this->app->register(StrAs::class);
        $this->app->register(StEra::class);
        scDotPkS();
    }
}