<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduitsRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProduitsCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProduitsCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Produits::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/produits');
        CRUD::setEntityNameStrings('produits', 'produits');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
        $this->getFieldsData();
        CRUD::column('titre');
        CRUD::column('nb_parts');
        CRUD::column('prix');
        
        CRUD::column('actif');
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        
        CRUD::field('titre');
        CRUD::field('prix');
        CRUD::field('nb_parts');
        CRUD::field('description');
        CRUD::addField([ // Photo
            'name'      => 'image',
            'label'     => 'image',
            'type'      => 'upload_multiple',
            'prefix' => 'storage',
            'upload'    => true,
            'temporary' => 10,
        ]);
        CRUD::field('actif');
        CRUD::field('actu');
       CRUD::addField([
            'label' => "Categories",
            'type' => 'select_multiple',
            'name' => 'categories', // the method that defines the relationship in your Model
            'entity' => 'categories', // the method that defines the relationship in your Model
            'attribute' => 'label', // foreign key attribute that is shown to user
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
            'model' => "App\Models\Categories", // foreign key model
            'options'   => (function ($query) {
                return $query->orderBy('label', 'ASC')->get();
            }), // force the related options to be a custom query, instead of all(); you can use this to filter the results show in the select
        
           
        ]);
       
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
       

        

      
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    function getFieldsData()
    {
        $this->crud->addColumn([
            'name' => 'image',
            'label' => 'images',
            'type' => 'image',
            'prefix' => '',
            'height' => '80px',
            'width' => 'auto',
            

        ]);
    }
    
}

