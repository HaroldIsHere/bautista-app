<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductService::class, function ($app) {
            $products = [
                [
                    'id' => 1,
                    'name' => 'Banana',
                    'category' => 'Fruits'
                ], 
                [
                    'id' => 2,
                    'name' => 'Lettuce',
                    'category' => 'Vegetables'
                ],
                [
                    'id' => 3,
                    'name' => 'Corned Beef',
                    'category' => 'Canned Goods'
                ]
            ];

            return new PRoductService($products);    
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->share('productKey', 'fritzbautista100');
    }
}
