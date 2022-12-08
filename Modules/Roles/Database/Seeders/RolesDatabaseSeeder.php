<?php

namespace Modules\Roles\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesDatabaseSeeder extends Seeder
{
    private $permissions , $user_permissions;


    public function __construct()
    {
        /*
        set the default permissions
        */
        $this->permissions =  [
                                /* user */
                                'ver_usuarios',
                                'agregar_usuarios',
                                'editar_usuarios',
                                'eliminar_usuarios',

                                /* roles */

                                'ver_roles',
                                'agregar_roles',
                                'editar_roles',
                                'eliminar_roles',

                                /* permisos*/
                                'ver_permisos',
                                'agregar_permisos',
                                'editar_permisos',
                                'eliminar_permisos',
                                'asignar_permisos',

                                /* logins */
                                'ver_logins',
                                
                              ];
        /*
        set the permissions for the user role, by default
        role admin we will assign all the permissions
        */
        $this->user_permissions = ['editar_usuarios', 'ver_logins'];

    }




    public function run()
	  {
    	  // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        foreach ($this->permissions as $permission)
        {
            Permission::create(['name' => $permission]);
        }

        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Tecnologia']);
        $role->givePermissionTo($this->permissions);

        // create the admin role and set all default permissions
        $role = Role::create(['name' => 'Seguridad']);
        $role->givePermissionTo($this->permissions);

        // create the user role and set all user permissions
        $role = Role::create(['name' => 'Usuario']);
        $role->givePermissionTo($this->user_permissions);
    }
}
