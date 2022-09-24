@php($urlcat = request()->query('categories'))
<div class="mx-6">

    <div class="relative inline-flex self-start ">
        <i class="absolute right-0 p-2 mr-1 text-black rounded pointer-events-none fa-solid fa-chevron-down"></i>
       
            
            <form  name="form_filter" method="get" action="{{ route('searchfilter') }}" >
                @csrf
                
                <select name="categories" class="pl-5 pr-10 text-lg font-bold text-gray-600 bg-[#EBF5FF] border-2 border-gray-500 rounded appearance-none md:text-xl h-8 w-48 hover:border-gray-400 focus:outline-none" onchange="form_filter.submit()">
                    <option value="" >Catégories</option>
                     @foreach($categories as $categs)
                     <option value="{{$categs->id}}"{{ $urlcat == $categs->id ? 'selected' : '' }} >{{$categs->label}} </option>
                  @endforeach
                 </select>
                
            </form>
           
    </div>
    <div class="flex justify-center my-5 text-center">


        <span class="flex items-center content-center justify-center w-2/3 h-auto md:w-1/3">
            {{-- {{$cats->description}} --}}
        </span>

    </div>

</div>
