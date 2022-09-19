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


 <section class="text-gray-600 body-font">
    <div class="container flex flex-col px-5 pt-16 mx-auto md:pt-4">
      <div class="mx-auto lg:max-w-5xl">
       
        <div class="flex flex-col mt-10 sm:flex-row px-2">
            <div class="pt-4 mt-4 text-center border-t border-black sm:w-2/3 sm:pl-8 sm:py-8 sm:border-r sm:border-t-0 sm:mt-0 sm:text-center sm:mb-3 p-1">
                <p class="mb-2 text-lg leading-relaxed text-black">Meggings portland fingerstache lyft, post-ironic fixie man bun banh mi umami everyday carry hexagon locavore direct trade art party.
                    man bun banh mi umami everyday carry hexagon locavore direct trade art party.
                </p>
                <button class="border rounded-lg p-2 border-black bg-[#38ADA9]">4,50/parts</button>
            </div>
            <div class="text-center sm:w-1/3 sm:pr-8 sm:py-8">
              <div class="flex flex-col items-center justify-center text-center text-black">
                  <h2 class="mt-4 text-lg font-medium">Autres détails</h2>
                  <div class="w-12 h-1 mt-2 mb-4 bg-blue-800 rounded"></div>
                  <p class="text-base">Raclette knausgaard hella meggs normcore williamsburg enamel pin sartorial venmo tbh hot chicken gentrify portland.</p>
              </div>
              
            </div>
        </div>
      </div>
    </div>
  </section>

  