<div class="flex items-start">
    <div class="flex flex-col items-center">
        <h2 class="timeElement bg-black py-2 text-gray-200 flex justify-center items-center relative w-[100px]">{{$time}}</h2>
        <div id="dot-line" class="dot-line h-full"></div>
    </div>

    <aside class="content flex flex-col gap-5 ml-4">
        {{$slot}}
    </aside>
</div>
