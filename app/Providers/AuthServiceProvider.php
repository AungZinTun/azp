<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Product management
        Gate::define('product_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Product categories
        Gate::define('product_category_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_category_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_category_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_category_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Product tags
        Gate::define('product_tag_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_tag_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_tag_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_tag_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_tag_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Products
        Gate::define('product_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('product_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Album
        Gate::define('album_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('album_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('album_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('album_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('album_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Client
        Gate::define('client_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('client_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Contact management
        Gate::define('contact_management_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Contact companies
        Gate::define('contact_company_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_company_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Contacts
        Gate::define('contact_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('contact_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: User actions
        Gate::define('user_action_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

    }
}
