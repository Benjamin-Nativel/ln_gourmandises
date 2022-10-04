<div x-data="{ modelOpen: false }">
    @auth
        <button @click="modelOpen =!modelOpen">
            <span class="px-4 hover:text-blue-400">Laisser un commentaire</span>
        </button>
    @endauth

    <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-900 bg-opacity-60" aria-hidden="true"></div>
            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block pt-8 overflow-hidden transition-all transform rounded-lg 2xl:max-w-2xl">
                <section class="">
                    {{-- @click="modelOpen = false" --}}
                    <div class="w-full max-w-md px-20 py-8 space-y-3 text-gray-100 bg-[#EBF5FF] rounded-xl">
                        <form action="/commentaires/{{ $produit->id }}" class="space-y-6 ng-untouched ng-pristine ng-valid"
                            method="post">
                            @csrf
                            <div class="space-y-1 text-sm">
                                <label for="comms" class="block pb-2 text-gray-200">Laisser un commentaire</label>
                                <textarea class="w-full px-4 py-3 text-gray-100 bg-gray-200 border-black rounded-md focus:border-teal-400"
                                    rows="6" cols="30" minlength="5" name="contenu" placeholder="commenter..." required></textarea>
                            </div>
                            @auth

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            @endauth
                            <input type="hidden" name="product_id" value="{{ $produit->id }}">

                            
                            <button
                                class="block w-full p-3 text-center text-gray-900 transition-colors duration-200 bg-teal-400 rounded hover:bg-teal-200 focus:bg-teal-200">Poster</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
