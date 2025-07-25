<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Review;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('blocks.reviews.last', function($view) {
            $view->with(['reviews' => Review::whereActive(true)->orderBy('date', 'desc')->limit(4)->get()]);
        });
    }
}
