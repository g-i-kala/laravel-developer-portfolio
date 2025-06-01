<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Project;
use App\Models\Developer;
use App\Models\SkillCategory;
use App\Policies\ProjectPolicy;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    protected $policies = [
        Project::class => ProjectPolicy::class
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
        if (Schema::hasTable('skill_categories')) {
            View::share('skillCategories', SkillCategory::with('skills')->get());
        }

        if (Schema::hasTable('developers')) {
            View::share('developer', Developer::with('user')->first());
        }
	
	if (request()->header('X-Forwarded-Proto') === 'https') {
		URL::forceScheme('https');
	}
	
	if (app()->environment('production')) {
		URL::forceScheme('https');
	}
    }
}
