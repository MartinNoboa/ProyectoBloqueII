<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
        Gate::define('isSuperAdmin', function($user) {
            $role = DB::table('roles_users')
            ->select('role_id')
            ->where('roles_users.user_id','=',$user->id)
            ->first();
            //dd($role);
            
            return $role->role_id == 1;
        });

        Gate::define('isBecario', function($user) {
            $role = DB::table('roles_users')
            ->select('role_id')
            ->where('roles_users.user_id','=',$user->id)
            ->first();
            //dd($role);
            
            return $role->role_id == 7;
        });
    }
}
