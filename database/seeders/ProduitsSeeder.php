<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Produits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProduitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(['label' => ' Chocolat','description' => 'voici la description de la catégorie Chocolat']);
        Categories::create(['label' => 'Créme','description' => 'voici la description de la catégorie Créme']);
        Categories::create(['label' => 'Fruits','description' => 'voici la description de la catégorie Fruits']);
       

        Produits::create(['titre' => 'Mignardises', 'description' => 'Il s\'agit d\'un fraiser réaliser avec des produits locaux bla bla', 'prix' => '3.5','image' => '  ', 'nb_parts' => '25', 'actif' => 1 ,'actu' => 1 ]); 
        Produits::create(['titre' => 'Number-cakes', 'description' => 'Il s\'agit d\'un fraiser réaliser avec des produits locaux bla bla', 'prix' => '3.5',  'image' => ' 	 ', 'nb_parts' => '25','actif' => 1 ,'actu' => 1]);
        
    }
}
