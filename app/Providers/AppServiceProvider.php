<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('backuserfacade', function($app){
            return new \App\Repositories\admin\BackUserRepository();
        });

        $this->app->singleton('backrolefacade', function($app){
            return new \App\Repositories\admin\BackRoleRepository();
        });

        $this->app->singleton('backmenufacade', function($app){
            return new \App\Repositories\admin\BackMenuRepository();
        });

        $this->app->singleton('backpermissionfacade', function($app){
            return new \App\Repositories\admin\BackPermissionRepository();
        });
    }
}
