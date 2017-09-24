<?php

namespace Westery\Wechatapp;
use Illuminate\Support\ServiceProvider;

/**
 * Class WechatAppServiceProvider
 * @package Westery\Wechatapp
 */
class WechatAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/wechatapp.php' => config_path('wechatapp.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/wechatapp.php', 'wechatapp'
        );
        $this->app->singleton('WechatApp', function ($app) {
            $app = new WechatApp(config('wechatapp.default'));
            return $app;
        });
    }
}
