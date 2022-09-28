<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Repositories\ProductRepository;
use App\Http\Repositories\RedisProductRepository;
use App\Http\Repositories\MysqlProductRepository;
use App\Http\Controllers\Api\V1\HomeController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->when(HomeController::class)
        ->needs(ProductRepository::class)
        ->give(function () {
            return new RedisProductRepository(
                new MysqlProductRepository()
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
