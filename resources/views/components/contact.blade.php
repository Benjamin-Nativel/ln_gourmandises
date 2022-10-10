<div class="relative text-gray-600 bg-slate-300 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-12 text-center">
            <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Me contacter</h1>
            <p class="mx-auto text-base leading-relaxed lg:w-2/3">Vous souhaitez prendre contact pour plus d'information
                ?</p>
        </div>
        <div class="mx-auto lg:w-1/2 md:w-2/3">
            <form action="{{ Route('send.message.google') }}" method="POST">
                @csrf
                <div class="flex flex-wrap -m-2">
                    <div class="w-1/2 p-2">
                        <div class="relative">
                            <label for="name" class="text-sm leading-7 text-gray-600">Nom</label>
                            <input  type="text" name="name" value="" required
                                class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-[#EBF5FF] bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">

                        </div>
                    </div>
                    <div class="w-1/2 p-2">
                        <div class="relative">
                            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                            <input type="email" id="email" name="email" value="" required
                                class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-[#EBF5FF] bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                        </div>
                    </div>
                    <div class="w-full p-2 ">
                        <div class="w-full ">
                            <label for="sujet" class="text-sm leading-7 text-gray-600">Sujet du message</label>
                            <input type="sujet" id="sujet" name="sujet" required
                                class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-[#EBF5FF] bg-opacity-50 border border-gray-300 rounded outline-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200">
                        </div>
                    </div>
                    <div class="w-full p-2">
                        <div class="relative">
                            <label for="message" class="text-sm leading-7 text-gray-600">Message</label>
                            <textarea id="message" name="message"required
                                value=""class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-[#EBF5FF] bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-blue-500 focus:bg-white focus:ring-2 focus:ring-blue-200"></textarea>
                        </div>
                    </div>
                    <div class="w-full p-2">
                        <button
                            class="flex px-8 py-2 mx-auto text-lg text-white bg-[#38ADA9] border-0 rounded focus:outline-none hover:bg-[#375d5c]"
                            type="submit">Envoyer</button>
                    </div>
                </div>
            </form>
            <div
                class="flex flex-col items-center justify-center w-2/3 mx-auto mt-4 text-center border-t-2 border-black">
                <div class="flex items-center content-center justify-center mt-4">Ou me contacter via les réseaux
                    sociaux</div>
                <div class="flex items-center content-center justify-around mt-4 space-x-5">
                    <div class="flex items-center content-center justify-center w-2/4 h-auto "> <a
                            href="https://www.facebook.com/Lngourmandises"><i
                                class="h-auto text-black fa-brands fa-facebook-f"></i></a></div>
                    <div class="flex items-center content-center justify-center w-2/4 h-auto"><a
                            href="https://www.instagram.com/ln_gourmandises"><i
                                class="text-black fa-brands fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
