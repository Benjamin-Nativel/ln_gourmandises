@php   use \App\Http\Controllers\produitsController; @endphp
@extends(backpack_view('blank'))
@section('content')
    @php
        $allproduits = produitsController::getCountProds();
       
    @endphp
    @foreach ($allproduits as $produit)
        @php
            $produit = $produit;
        @endphp
    @endforeach
    @foreach ($allproduits as $categories)
        @php
            $categories = $categories;
        @endphp
    @endforeach
    @foreach ($allproduits as $commentaires)
        @php
            $commentaires = $commentaires;
                    @endphp
    @endforeach
    <section class="text-gray-600 body-font">
        <div class="">
            <h1 class="mb-3 text-2xl font-medium text-gray-900 title-font sm:text-3xl">Statistiques</h1>
            <div class="flex flex-wrap">
                <div class="p-2 lg:w-1/4 min-w-[130px]">
                    <div
                        class="relative h-24 px-8 pt-8 pb-24 overflow-hidden text-center bg-gray-100 bg-opacity-75 rounded-lg">
                        <h1 class="mb-1 text-xl font-medium text-gray-900 title-font sm:text-2xl">Nombre de produits inscrit</h1>
                        <div class="leading-relaxed">Total:<span
                                class="pl-2 mb-1 text-xl font-medium tracking-widest text-blue-800 title-font">{{ count($produit) }}
                        </span>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/4 min-w-[130px] min-h-[100px]">
                    <div
                        class="relative h-12 px-8 pt-8 pb-24 overflow-hidden text-center bg-gray-100 bg-opacity-75 rounded-lg">
                        <h1 class="mb-1 text-xl font-medium text-gray-900 title-font sm:text-2xl">Nombre de categories</h1>
                        <div class="leading-relaxed">Total:<span
                                class="mb-1 text-xl font-medium tracking-widest text-red-400 title-font">
                                {{ count($categories) }}
                        </span>
                        </div>


                    </div>
                </div>
                

                
                <div class="p-2 lg:w-1/4 min-w-[130px] h-32 no-underline" >
                    <div
                        class="relative h-12 px-8 pt-8 pb-24 overflow-hidden text-center bg-gray-100 bg-opacity-75 rounded-lg">
                        <h1 class="mb-1 text-xl font-medium text-gray-900 title-font sm:text-2xl">Commentaires a valider</h1>
                        <div class="leading-relaxed">Total:<span
                                class="mb-1 text-xl font-medium tracking-widest text-red-400 title-font">
                                {{ count($commentaires) }}
                        </span>
                        <a  href="/admin/commentaires">Consulter
                        </a>
                    </div>


                    </div>
                </div>

            </div>
           
        </div>


    </section>


@endsection