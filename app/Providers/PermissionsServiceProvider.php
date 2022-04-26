<?php
namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;
use App\Http\Traits\UrlTrait;
use App\Http\Traits\HasPermissionsTrait;

class PermissionsServiceProvider extends ServiceProvider
{

    use UrlTrait;
    use HasPermissionsTrait;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    
        
        
        Gate::define('superAdmin', function($user) {
            return session()->get('kode_level') ==  1;
        });
        Gate::define('admin', function($user) {
            return session()->get('kode_level') == 2;
        });
        Gate::define('user', function($user) {
            return session()->get('kode_level') == 3;
        });
        
        
        // Gate::define('create', function ($permission) {
            //     return $permission['create'] === $post->user_id;
            // });

            
        Gate::define('create', function () {
            return session()->get('kode_level') == 1;
        });
        Gate::define('read', function ($permission) {
            foreach($this->get_user_permissions_by_user_id() as $permission)
            {
                return $permission['read'] != false;
            }
        });
        Gate::define('update', function ($permission) {
            foreach($this->get_user_permissions_by_user_id() as $permission)
            {
                return $permission['update'] != false;
            }
        });
        Gate::define('delete', function ($permission) {
            foreach($this->get_user_permissions_by_user_id() as $permission)
            {
                return $permission['delete'] != false;
            }
        });
        


       //Blade directives
        Blade::directive('role_permissions_access', function ($role) {
                return "if(session()->get('kode_level') != 1) :"; //return this if statement inside php tag
        });

        Blade::directive('end_role_permissions_access', function ($role) {
                return "endif;"; //return this endif statement inside php tag
        });
    }
}
