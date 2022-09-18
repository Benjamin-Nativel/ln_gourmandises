 <div>
     <div class="w-2/3 mb-6 swiper mySwiper">
         <div class="swiper-wrapper">
             <div class="swiper-slide">
                 <img class="object-cover w-full h-56" src="https://source.unsplash.com/user/erondu/3000x900"
                     alt="apple watch photo" />
             </div>
             <div class="swiper-slide">
                 <img class="object-cover w-full h-56" src="https://source.unsplash.com/collection/190727/3000x900"
                     alt="apple watch photo" />
             </div>
             <div class="swiper-slide">
                 <img class="object-cover w-full h-56" src="https://source.unsplash.com/collection/190728/3000x900"
                     alt="apple watch photo" />
             </div>
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
     {{-- var img_bdd ={!! json_encode($images) !!};
 img_bdd[0], --}}

     <div class="flex items-center justify-center h-auto ">
         <div class="flex items-center content-center justify-center ">
             <div class="flex flex-col justify-center w-2/3 space-y-1">
                 <div class="flex items-center content-center justify-center mb-2 "><span>Lorem Ipsum is simply dummy
                         text
                         of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                         text
                         ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                         type
                         specimen book.</span></div>
                 <div class="flex items-center content-center justify-center "><button
                         class="bg-[#38ADA9] border-black m-4 rounded-md border-2 text-xl">4,5€/parts</button></div>
             </div>
         </div>
         <div class="flex items-center content-center justify-center w-1/3 ">
             <div class="flex flex-col justify-center w-2/3 space-y-1">
                 <div class="flex items-center content-center justify-center mb-2 ">
                     <p class="border-b-2 border-black">Autres détails</p>
                 </div>
                 <div class="flex items-center content-center justify-center h-24 ">
                     <span>Lorem Ipsum is simply dummy text
                         of the printing and typesetting industry.


                     </span>
                 </div>
             </div>
         </div>

     </div>
 </div>
