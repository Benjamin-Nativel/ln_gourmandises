 
 <div>
    @php
$prd = $produit->image
@endphp


     <div class="w-2/3 mb-6 swiper mySwiper">
         <div class="swiper-wrapper">
            @foreach($prd as $image)
             <div class="swiper-slide">
                 <img class="object-cover w-full h-56" src="/storage/{{$image }}" alt="">

             </div>
             @endforeach
             {{-- <div class="swiper-slide">
                 <img class="object-cover w-full h-56" src="/storage/{{ $produit->image[1] }}" alt="">

             </div>
             <div class="swiper-slide">
                 <img class="object-cover w-full h-56" src="/storage/{{ $produit->image[2] }}" alt="">

             </div> --}}

         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
         <div class="swiper-pagination"></div>
     </div>

     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <script>
         var swiper = new Swiper('.mySwiper', {
             spaceBetween: 30,
             centeredSlides: true,
             autoplay: {
                 delay: 2500,
                 disableOnInteraction: false,
             },
             pagination: {
                 el: '.swiper-pagination',
                 clickable: true,
             },
             navigation: {
                 nextEl: '.swiper-button-next',
                 prevEl: '.swiper-button-prev',
             },
         });
     </script>
     


     <section class="text-gray-600 body-font">
         <div class="container flex flex-col px-5 pt-16 mx-auto md:pt-4">
             <div class="mx-auto lg:max-w-5xl">

                 <div class="flex flex-col px-2 mt-10 sm:flex-row">
                     
                         <div
                             class="p-1 pt-4 mt-4 text-center border-t border-black sm:w-2/3 sm:pl-8 sm:py-8 sm:border-r sm:border-t-0 sm:mt-0 sm:text-center sm:mb-3">
                             <p class="mb-2 text-lg leading-relaxed text-black">{{ $produit->description }}</p>
                             </p>
                             <button class="border rounded-lg p-2 border-black bg-[#38ADA9]">{{$produit->prix}} la parts</button>
                         </div>
                         <div class="text-center sm:w-1/3 sm:pr-8 sm:py-8">
                             <div class="flex flex-col items-center justify-center text-center text-black">
                                 <h2 class="mt-4 text-lg font-medium px-2">Cliquer ci-dessous pour laisser un commentaire</h2>
                                 <div class="w-12 h-1 mt-2 mb-4 bg-blue-800 rounded"></div>
                                 <p class="text-base">
                                    

                                        @include('components.addComments')
                                    
                                </p>
                             </div>

                         </div>
                     
                </div>
             </div>

         </div>
     </section>
    
 </div>
