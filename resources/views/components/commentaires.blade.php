<div class="flex items-center justify-center mx-6 my-3">
    @forelse($comments as $comment)
        <div class="flex items-center content-center justify-around p-2">
            <div
                class="container flex flex-col w-full max-w-lg p-6 mx-auto text-white divide-y divide-black rounded-md bg-[#EBF5FF] ">
                <div class="flex justify-between w-48 p-4">
                    <div class="flex space-x-4">
                        <div>
                            <img src="https://source.unsplash.com/100x100/?portrait" alt=""
                                class="object-cover w-12 h-12 bg-gray-500 rounded-full">
                        </div>
                        <div>
                            <h4 class="font-bold text-black">{{ $comment->user->name }}</h4>

                        </div>
                    </div>

                </div>
                <div class="h-24 p-4 mb-6 space-y-2 text-sm text-gray-400 w-96">
                    <span class="break-words "> {{ $comment->content }}</span>

                </div>
            </div>
        </div>
    @empty

        <div class="flex flex-col py-8 mx-auto" >
            <div class="flex flex-col mx-auto border-b border-black">
                <i class="pt-20 mx-32 fa-solid fa-ban fa-6x"></i>
                <h2 class="p-4 text-xl ">Aucun commentaire pour ce produits</h2>
            </div>
        </div>
    @endforelse

</div>
