<div class="flex items-start">
    <div class="flex flex-col items-center">
        <h2 class="timeElement rounded-md bg-top-black py-2 text-sm md:text-base text-gray-200 flex justify-center items-center relative w-[60px] md:w-[100px]">{{$time}}</h2>
        <div id="dot-line" class="dot-line h-full"></div>
    </div>

    <aside class="content text-sm md:text-base flex flex-col gap-5 ml-4">
        {{$slot}}
    </aside>
</div>

