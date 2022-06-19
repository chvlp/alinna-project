<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('seen-item', function($user)
        {
            return $user->hasAnyRoles(['ເຈົ້າຂອງອາພາດເມັ້ນ','ພະນັກງານ']);
        });


        Gate::define('edit-item', function($user)
        {
            return $user->hasRole('ພະນັກງານ');

        });

        Gate::define('delete-item', function($user)
        {
            return $user->hasRole('ຜູ້ໃຊ້');
        });
    }
}
