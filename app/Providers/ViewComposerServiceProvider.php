<?php

namespace App\Providers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSidebar();
        $this->composeUserbar();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function composeSidebar()
    {
        view()->composer('layouts.partials.sidebar', function ($view) {
            $user = Auth::user();
            $company = Auth::user()->company;
            $view->with(['user' => $user, 'company' => $company]);
        });
    }

    private function composeUserbar()
    {
        view()->composer('layouts.partials.userbar', function ($view) {
            $user = Auth::user();
            $notifications = Notification::with('type')
                ->where('user_id', $user->id)
                ->where('status', 'pending')
                ->latest()
                ->get();
            $view->with(['user' => $user, 'notifications' => $notifications]);
        });
    }
}
