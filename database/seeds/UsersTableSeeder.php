<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $publisherRole = Role::create(['name' => 'Publisher']);

        $viewPostsPermission = Permission::create(['name' => 'View Posts']);
        $createPostsPermission = Permission::create(['name' => 'Create Posts']);
        $updatePostsPermission = Permission::create(['name' => 'Update Posts']);
        $deletePostsPermission = Permission::create(['name' => 'Delete Posts']);


        $viewUsersPermission = Permission::create(['name' => 'View Users']);
        $createUsersPermission = Permission::create(['name' => 'Create Users']);
        $updateUsersPermission = Permission::create(['name' => 'Update Users']);
        $deleteUsersPermission = Permission::create(['name' => 'Delete Users']);


        $admin = new User;
        $admin->name = "sedes";
        $admin->email = "sedes@gmail.com";
        $admin->password = '123456';
        $admin->save();

        $admin->assignRole($adminRole);

        $publisher = new User;
        $publisher->name = "Admin";
        $publisher->email = "admin@gmail.com";
        $publisher->password = '123456';
        $publisher->save();

        $publisher->assignRole($publisherRole);
    }
}
