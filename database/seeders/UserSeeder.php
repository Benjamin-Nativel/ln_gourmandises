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
        
        Role::firstOrCreate(
            ['name' => 'Administrateur'],
            ['name' => 'Administrateur']);
        Role::firstOrCreate(['name' => 'Utilisateur'],
            ['name' => 'Utilisateur']);
    
            
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],  //si la valeur existe déja le seeder du dessous ne fera rien...
            ['name' => 'Administrateur', 'email' => 'admin@gmail.com',  'password' => bcrypt('abcdefg')])->assignRole('Administrateur');
            User::firstOrCreate(
                ['email' => 'nativel.laurence@gmail.com'], 
                ['name' => 'Laurence', 'email' => 'nativel.laurence@gmail.com',  'password' => bcrypt('laulau123')])->assignRole('Administrateur');
    
}
}
