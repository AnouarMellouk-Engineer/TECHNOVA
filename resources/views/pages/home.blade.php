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
    <div class=" px-10   pt-5 "> <!--pb-56-->
        <div  class=" flex justify-between mb-16">
            @foreach($featurs as $featur)
            <x-card-info :featur='$featur'/>
            @endforeach
        </div>
        <h2 class="  relative  text-center font-bold text-3xl my-12  after:absolute after:w-[40%] after:h-[1px] after:bg-gray-500 after:right-0 after:top-[50%] before:absolute before:w-[40%] before:h-[1px] before:bg-gray-500 before:left-0 before:top-[50%] ">Laptops Section</h2>
        <div class="flex justify-between items-center">
              <x-product-card/>
            <x-product-card/>
              <x-product-card/>
                <x-product-card/>
        </div>
        <h2 class="  relative  text-center font-bold text-3xl my-12 mt-16  after:absolute after:w-[37%] after:h-[1px] after:bg-gray-500 after:right-0 after:top-[50%] before:absolute before:w-[37%] before:h-[1px] before:bg-gray-500 before:left-0 before:top-[50%] ">Laptops On Discount</h2>
        <div class="flex justify-between items-center">
              <x-product-card/>
            <x-product-card/>
              <x-product-card/>
                <x-product-card/>
        </div>
         </div>
        <div class=" my-11 bg-purple-700  py-12">
            <h2 class="text-center font-bold text-3xl text-white mb-5"> All categories</h2>
            <div class="px-10 flex justify-center items-start gap-3.5 flex-wrap">
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                 <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
                <x-categorie-icon/>
            </div>
        </div>
</x-base>
