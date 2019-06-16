<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // elimina la cache de roles creados anteriormente
        app()['cache']->forget('spatie.permission.cache');

                //SUPER-ADMINISTRADOR para programadores



        // creacion de permisos de usuario

        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        // creacion de permisos de roles

        Permission::create(['name' => 'create role']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update role']);
        Permission::create(['name' => 'delete role']);

        // creacion de permisos de perfil

        Permission::create(['name' => 'create permission']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permission']);
        Permission::create(['name' => 'delete permission']);

        // Crear roles y asignar permisos

        // solo lectura y actualizacion
        $role = Role::create(['name' => 'Editor']);
        $role->givePermissionTo('read users');
        $role->givePermissionTo('update user');

        //CRUD completo

        $role = Role::create(['name' => 'Moderador']);
        $role->givePermissionTo('create user');
        $role->givePermissionTo('read users');
        $role->givePermissionTo('update user');
        $role->givePermissionTo('delete user');

        $role = Role::create(['name' => 'Super-Admin']);
        $role->givePermissionTo(Permission::all());


    }
}
