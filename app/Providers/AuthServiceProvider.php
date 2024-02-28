<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\PrinterType;
use App\Policies\BrandPolicy;
use App\Policies\CheckModelPolicy;
use App\Policies\CheckTypePolicy;
use App\Policies\OfficePolicy;
use App\Policies\PrinterPolicy;
use App\Policies\PrinterTypePolicy;
use App\Policies\RolePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        OfficePolicy::class,
        PrinterPolicy::class,
        BrandPolicy::class,
        CheckTypePolicy::class,
        PrinterTypePolicy::class,
        RolePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('updateUtilities', [PrinterPolicy::class, 'updateUtilites']);
        Gate::define('pay', [CheckModelPolicy::class, 'pay']);

    }
}
