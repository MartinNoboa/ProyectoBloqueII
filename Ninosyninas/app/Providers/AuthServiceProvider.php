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
        Gate::define('manejarUsuarios', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 1);
            //dd($role);
            
            return $role->count();
        });

        Gate::define('manejarDonadores', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 2);
            //dd($role);
           
            return $role->count();
            
        });

        Gate::define('manejarContenido', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 3);
            //dd($role);
           
            return $role->count();
            
        });

        Gate::define('editarPagina', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 4);
            //dd($role);
           
            return $role->count();
            
        });

        Gate::define('mentoria', function($user) {
            $role = DB::table('permits_roles as pr')
            ->join('roles as r','pr.role_id','=','r.id')
            ->join('roles_users as ru','ru.role_id','=','r.id')
            ->select('permit_id')
            ->where('ru.user_id','=',$user->id)
            ->where('permit_id','=', 5);
            //dd($role);
           
            return $role->count();
            
        });
    }
}
