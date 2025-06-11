<x-base>
    <x-nav/>
    <!-- landing page -->
    <div class="  mb-6  flex flex-row-reverse bg-cover  bg-no-repeat bg-center h-[100vh]  bg-linear-to-r from-black-500 to-black-500   relative" style="background-image: url({{asset('images/laptop.jpg')}})">
        <!-- 🔲 Black overlay to darken the image -->
        <div class="absolute inset-0 bg-black/40 "></div>
        <!-- content of the landing page-->
        <div class="flex flex-col items-start   px-10  text-white  w-2/4 mt-36 pl-6 relative ">
            <p class=" opacity-80  font-medium">For you and everyone</p>
            <h1 class=" text-6xl font-medium mb-3">Technova Store</h1>
            <p class=" mb-5  ">Lorem ipsum dolor, sit amet consectetur adipisicing eliaecati itaque fugiat reiciendis Lorem ipsum dolor sit amet.?</p>
            <p class=" text-3xl font-bold mb-7 ">acheter mintenant !</p>
            <div class=" flex gap-5">
                <button><a href="" class="  px-14 py-3 text-white font-medium bg-purple-600 rounded-sm hover:bg-purple-800 duration-300 text-xl">log in</a></button>
                <button><a href="" class=" px-14 py-3 text-black font-medium bg-white rounded-sm hover:bg-gray-200 duration-300 text-xl">log in</a></button>
            </div>
        </div>
    </div>
    <div class=" px-10 pb-56 pt-5">
        <div  class=" flex justify-between ">
            @foreach($featurs as $featur)
            <x-card-info :featur='$featur'/>
            @endforeach
        </div>
        {{-- <div class=" flex gap-7 ">
            <x-landing-card/>
            <x-landing-card/>
            <x-landing-card/>
        </div> --}}
    </div>

</x-base>
