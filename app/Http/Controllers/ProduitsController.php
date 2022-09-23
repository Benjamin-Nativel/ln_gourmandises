<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Commentaires;
use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function getProduits (Request $request){
        $produits = Produits::where('actif', '=', 1);
        $q = request()->input('q');
       
        if ($request->filled('categories')) {
            $categories = $request->categories;
            $produits->whereHas('cats', function ($q) use ($categories) {

                $q->where('categories_id', '=', $categories);
            });
        }else{
            $produits = Produits::where('actif', '=', 1);
        }
       
        $categories = Categories::all();
        $actu = Produits::where('actu', '=', 1)->get();
        return view('index', [
            'produits' => $produits->paginate(8),  //a la place d'un get me demande pas pourquoi!
            'categories' => $categories,
            'q' => $q,
            'actu' => $actu
        ]);
    }

    public function getOneDetails($id){
        $produit = Produits::find($id);
       $produits = Produits::where('actif', '=', 1)->limit(3)->get();
     
        $comments = Commentaires::where('product_id', $id)->where('valid','1')->inRandomOrder()->limit(2)->get();
        return view('detail', [
            'produit' => $produit,
            'produits' => $produits,
            'comments' => $comments,
        ]);
    }


    
        
        
    
}

