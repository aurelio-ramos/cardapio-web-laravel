<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // resetar roles and permissions em cache
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // criar permissions BROWSE, READ, EDIT, ADD, DELETE
        Permission::create(['name' => 'browse_admin']);
        //permissão para gerenciar usuarios
        Permission::create(['name' => 'browse_users']);
        Permission::create(['name' => 'read_users']);
        Permission::create(['name' => 'edit_users']);
        Permission::create(['name' => 'add_users']);
        Permission::create(['name' => 'delete_users']);
        
        //criar permissões para gerenciar proprio perfil user
        Permission::create(['name' => 'browse_profile']);
        Permission::create(['name' => 'read_profile']);
        Permission::create(['name' => 'edit_profile']);
        Permission::create(['name' => 'delete_profile']);

        // criar usuario padrão e atribui-lo as permissões existentes
        $usuario = Role::create(['name' => 'usuario']);
        $usuario->givePermissionTo('browse_profile');
        $usuario->givePermissionTo('read_profile');
        $usuario->givePermissionTo('edit_profile');
        $usuario->givePermissionTo('delete_profile');
        // criar usuario padrão e atribui-lo as permissões existentes
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('browse_profile');
        $admin->givePermissionTo('read_profile');
        $admin->givePermissionTo('edit_profile');
        $admin->givePermissionTo('delete_profile');

        $admin->givePermissionTo('browse_users');
        $admin->givePermissionTo('read_users');

        // criar usuario desenvolvedor e atribui-lo as permissões existentes
        $superAdmin = Role::create(['name' => 'developer']);
        // pega todas permissões via Gate::before em app\Providers\AuthServiceProvider.php:29
				
        // criando usuario de exemplo
        $user = \App\Models\User::factory()->create([
            'name' => 'Exemplo Ususario Comum',
            'email' => 'test@email.com',
        ]);
        $user->assignRole($usuario);

        $user = \App\Models\User::factory()->create([
            'name' => 'Exemplo Usuario Admin',
            'email' => 'admin@email.com',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'name' => 'Exemplo Usuario Super-Admin',
            'email' => 'superadmin@email.com',
        ]);
        $user->assignRole($superAdmin);
    }
}
