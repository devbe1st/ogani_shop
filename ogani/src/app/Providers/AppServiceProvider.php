<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Email;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /* ---------------------------------- Client ---------------------------------- */
        $categories = Category::where('status', 1)->get();

        // share
        View::share([
            'categories' => $categories
        ]);
        /* ---------------------------------- Client ---------------------------------- */
    }
}

