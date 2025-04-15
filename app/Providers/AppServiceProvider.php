<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\Tag;
use App\Policies\JobPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Job::class => JobPolicy::class
    ];

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
        Tag::unguard();
    }
}
