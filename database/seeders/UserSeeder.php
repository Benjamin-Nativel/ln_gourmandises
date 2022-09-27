<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        # permissions
        Permission::create(['name' => 'make-orders']);# roles
        Role::create(['name' => 'Administrateur']);
        Role::create(['name' => 'Utilisateur'])
            ->givePermissionTo('make-orders');# users
        User::create(['name' => 'Administrator', 'email' => 'adminr@gmail.com', 'password' => bcrypt('aBCDEFG')])
            ->assignRole('Administrateur');
            User::create(['name' => 'Chicken', 'email' => 'chickenbox@gmail.com', 'password' => bcrypt('ABCDEFG')])
            ->assignRole('Utilisateur');
    }
}
