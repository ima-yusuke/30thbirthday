<x-template title="Birthday">
    <section id="opening">
        <div class="bg-test h-screen w-full flex flex-col items-center justify-center overflow-hidden">
            <!-- Image Container -->
            <div class="relative h-[400px] w-[400px]">
                <!-- Image -->
                <img src="{{ asset('storage/img/top-flower.jpg') }}" class="h-full w-full object-cover rotate-infinite rounded-full">
                <!-- Section to be centered -->
                <section class="hidden top-text absolute inset-0 flex items-center justify-center">
                    <article class="text-top-black flex flex-col items-center gap-4">
                        <h1 class="text-2xl" id="top_text">Happy Birthday</h1>
                        <div class="flex flex-col items-center gap-1">
                            <p class="text-base">Chihaya Takeuchi</p>
                            <p>2024.08.18</p>
                        </div>
                    </article>
                </section>
            </div>
        </div>
        <button type="button" id="open-birthday" class="hidden top-text hover:cursor-pointer text-top-black absolute bottom-6 left-1/2 transform -translate-x-1/2">NEXT →</button>
    </section>


    <div class="w-full min-h-screen flex justify-center items-center bg-top-gray opacity-0" id="loading_container">
        <h1 class="text-white text-md text-center opacity-0">ちはちゃんお誕生日おめでとう</h1>
    </div>

    <div id="img_container" class="hide w-full min-h-screen flex justify-center items-center bg-top-gray">
        <img src="{{ asset('storage/img/flower-take.png') }}" class="h-100vh w-full object-cover  rounded-full opacity-0 flower hide">
        <img src="{{ asset('storage/img/pic02-02.jpeg') }}" class="h-[200px] w-[200px] object-cover rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic03-02.JPG') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic04-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic05-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic06-02.png') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic07-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic08-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic09-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic10-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic11-02.JPG') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic12-02.PNG') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic13-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic14-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic15-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic16-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic17-02.PNG') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic18-02.JPG') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic19-02.jpeg') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
        <img src="{{ asset('storage/img/pic20-02.JPG') }}" class="h-[200px] w-[200px] object-cover  rounded-full opacity-0 flower">
    </div>
    <div id="bg_water" class="hide absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full min-h-screen rounded-full blurred-background-on"></div>


    @vite(['resources/js/opening.js'])
</x-template>

