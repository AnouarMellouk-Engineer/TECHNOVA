

<div @class(['px-4', ' py-3' , 'border-x-1 border-gray-200'=>$featur['title'] == 'Extended Return Policy','flex', 'flex-col', 'items-center w-[30%]'])  >
    <img src="{{ asset($featur['img']) }}" alt="Icon" class=" w-18 h-18 mb-6">
    <p class=" text-lg font-extrabold mb-6">{{$featur['title']}}</p>
    <p class=" opacity-70 text-center px-14 ">{{$featur['desc']}}</p>
</div>

