<section class="text-gray-600 body-font">
    <div class="container px-5 mx-auto">
        <div class="flex flex-wrap -m-4">
            @forelse($produits as $produit)
            <a class="p-4 md:w-1/4" href="/produit/{{$produit->id}}">
            <div class="">
                <div class="h-full overflow-hidden border-opacity-60">
                    <img class="object-cover object-center w-full mb-2 rounded-lg shadow-2xl lg:h-48 md:h-36" src="/storage/{{$produit->image[0]}}" alt="blog">
                    
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex items-center content-center justify-center w-1/2 h-auto">
                            <h2 class="mb-1 text-xs font-bold tracking-widest text-[#DB3082] title-font">{{$produit->titre}}
                            </h2>
                        </div>
                        <div class="flex items-center content-center justify-center w-1/2 h-auto">
                            <h1 class="mb-3 text-lg font-medium text-gray-900 title-font">{{$produit->prix}} €/part</h1>
                        </div>
                    </div>
                </div>
            </div>
            
        </a>
        @empty
        <div class="flex flex-col mx-auto mt-4">
            <div class="mx-auto">
                <i class="pt-20 mx-12 fa-solid fa-ban fa-6x"></i>
                <h2 class="pt-4 text-xl ">Aucun produit trouvé</h2>
            </div>
        </div>
        
        @endforelse
        </div>
       
    </div>
</section>
