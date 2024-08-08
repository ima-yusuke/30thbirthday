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
                        <h1 class="text-2xl">Happy Birthday</h1>
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

    <div id="loading" class="hide fixed flex justify-center items-center text-2xl z-30 w-full min-h-screen bg-top-gray">
        <div class="loading-wrapper w-[100dvh] h-full">
            <section class="w-[200px] loading-test">
                <div class="loading-circle"></div>
                <div class="loading-circle"></div>
                <div class="loading-circle"></div>
                <div class="loading-shadow"></div>
                <div class="loading-shadow"></div>
                <div class="loading-shadow"></div>
            </section>
            <span id="loading_text" class="absolute left-1/2 -translate-x-1/2 bottom-48 w-[95%] md:w-[80%] text-center">Loading</span>
        </div>
    </div>
    @vite(['resources/js/opening.js'])
</x-template>

