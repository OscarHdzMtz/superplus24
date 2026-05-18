<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use App\Http\Livewire\CustomTwoFactorAuthenticationForm;

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
        if (config('app.env') !== 'local') {
            \Illuminate\Support\Facades\URL::forceScheme('https');
        }
        \Illuminate\Pagination\Paginator::useBootstrap();
        \Illuminate\Support\Facades\View::composer(['layouts.app', 'home', 'profile.show'], \App\Http\View\Composers\AdminSidebarComposer::class);

        // Override default Jetstream 2FA component with our safe custom version
        Livewire::component('profile.two-factor-authentication-form', CustomTwoFactorAuthenticationForm::class);
    }
}
