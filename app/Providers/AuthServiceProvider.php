<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\ErrorLog;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Policies\ErrorLogPolicy;
use App\Policies\ProductAttributePolicy;
use App\Policies\ProductPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        ErrorLog::class => ErrorLogPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
