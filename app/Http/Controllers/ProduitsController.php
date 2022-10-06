<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Commentaires;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProduitsController extends Controller
{
    public function getProduits(Request $request){
        $produits = Produits::where('actif', '=', 1);
        $q = request()->input('q');
        if ($request->filled('categories')) {
            $categories = $request->categories;
            $produits->whereHas('categories', function ($q) use ($categories) {

                $q->where('categories_id', '=', $categories);
            });
        }
        $actu = Produits::where('actu', '=', 1)->get();
        $categories = Categories::all();
        return view('index', [
            'produits' => $produits->paginate(8),  //a la place d'un get me demande pas pourquoi!
            'categories' => $categories,
            'q' => $q,
            'actu' => $actu
        ]);
    }
    static public function getCountProds(){    
   $produits = Produits::all();
   $prodCount= count($produits);
   $categories = Categories::all();
   $catCount= count($categories);
   $commentaires = Commentaires::where('valid','0')->get();
    $comCount= count($commentaires);
   return(compact('prodCount','comCount','catCount'));
    }
    


    
        
       
        


    public function getOneDetails($id){
        $produit = Produits::find($id);
       $produits = Produits::where('actif', '=', 1)->inRandomOrder()->limit(3)->get();
     
        $comments = Commentaires::where('product_id', $id)->where('valid','1')->inRandomOrder()->limit(2)->get();
        return view('detail', [
            'produit' => $produit,
            'produits' => $produits,
            'comments' => $comments,
        ]);
    }

    public function addComm(Request $request, $id)
    {
        $this->validate($request, [
            'contenu' => 'required|min:5|',
        ]);

        $comments = new Commentaires();
        
        $produit = Produits::where('id', '=', $id)->get();
        $produit = Produits::find($id);
        $comments->content = $request->contenu;
        $comments->user_id = Auth::user()->id;
        $comments->product_id = $id;
        $comments->save();
        $produit->update();
        return redirect()->route('getDetails', ['id' => $id]);
    }
    
        
        
    
}

