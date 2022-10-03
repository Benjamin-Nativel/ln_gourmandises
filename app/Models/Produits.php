<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'produits';
    
    protected $guarded = ['id'];
    

    protected $casts = [
        'image' => 'array'
    ];
   
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = "public";
        $destination_path = "/uploads";

        $this->uploadMultipleFilesToDisk($value, $attribute_name, $disk, $destination_path);

   
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
public function categories()
{
    return $this->belongsToMany(Categories::class,'categories_product','products_id','categories_id');
}

public function comms(){
    return $this->hasMany(Comments::class, 'id_comm', 'user_id', 'product_id', 'content')->orderBy('created_at', 'DESC');
}
   
}
