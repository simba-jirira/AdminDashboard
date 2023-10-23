<?php

namespace SimbaJirira\AdminDashboard;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Livewire\Livewire;
use SimbaJirira\AdminDashboard\Console\Commands\CheckUpTimeCommand;

class AdminDashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CheckUpTimeCommand::class,
            ]);
        }

        // Will add routes, views, etc.
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'admin-dashboard');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/admindashboard/migrations');

        // Publishing package assets for the admin dashboard
        $this->publishes([
            __DIR__.'/path/to/assets' => public_path('vendor/admin-dashboard'),
        ], 'admin-dashboard');

        // Publishing Package migrations
        $this->publishes([
            __DIR__.'/database/migrations/admindashboard/migrations' => database_path('migrations')
        ], 'migrations');


        Fortify::loginView(function () {
            return view('admin-dashboard::auth.login');
        });

//        Livewire::component('admin-dashboard::some-livewire-component', SomeLivewireComponent::class);

    }

    public function register()
    {
        // bindings
        Blade::component('admin-dashboard::layouts.app','admin-layout');
        Blade::component('admin-dashboard::layouts.auth','auth-layout');

        $this->app->bind('command.admin-dashboard:checkuptime', CheckUpTimeCommand::class);
        $this->commands('command.admin-dashboard:checkuptime');
    }
}
