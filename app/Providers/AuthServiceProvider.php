<?php

namespace App\Providers;

use App\Policies\BrandPolicy;
use App\Policies\CheckModelPolicy;
use App\Policies\CheckTypePolicy;
use App\Policies\OfficePolicy;
use App\Policies\PrinterPolicy;
use App\Policies\PrinterTypePolicy;
use App\Policies\RolePolicy;
use App\Policies\DeceasedDataPolicy;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        RolePolicy::class,
        DeceasedDataPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
