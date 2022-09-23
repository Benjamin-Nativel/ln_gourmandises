<div class="flex items-center justify-center mx-6 my-3">
    @foreach($comments as $comment)
        <div class="flex items-center content-center justify-around p-2">
            <div
                class="container flex flex-col w-full max-w-lg p-6 mx-auto text-white divide-y divide-black rounded-md bg-[#EBF5FF] ">
                <div class="flex justify-between p-4">
                    <div class="flex space-x-4">
                        <div>
                            <img src="https://source.unsplash.com/100x100/?portrait" alt=""
                                class="object-cover w-12 h-12 bg-gray-500 rounded-full">
                        </div>
                        <div>
                            <h4 class="font-bold text-black">{{backpack_user()->name}}</h4>

                        </div>
                    </div>

                </div>
                <div class="p-4 mb-6 space-y-2 text-sm text-gray-400">
                    <span class="break-words"> {{$comment->content}}</span>
                   
                </div>
            </div>
        </div>
     @endforeach
</div>
