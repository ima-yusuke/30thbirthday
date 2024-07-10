<x-template title="Birthday">
    <section class="bg-opening-red relative flex justify-center items-center min-h-screen">
        <article class="text-opening-white flex flex-col items-center gap-4">
            <h1 class="text-xl">Happy Birthday</h1>
            <div>
                <img src="{{asset("storage/img/opening.jpeg")}}" alt="opening-img" class="object-cover w-[200px] h-[300px] border-8 border-solid border-opening-white"/>
            </div>
            <div class="flex flex-col items-center gap-1">
                <p class="text-xl">Chihaya Tekeuchi</p>
                <p>2024.08.18</p>
            </div>
        </article>

        <article class="absolute bottom-8 ml-0 m-auto text-sm text-opening-white flex flex-col items-start">
           <button type="button" id="open-birthday" class="hover:cursor-pointer p-4">OPEN</button>
        </article>
    </section>

    <script>
        const BUTTON = document.getElementById("open-birthday");

        BUTTON.addEventListener('click', function() {
            window.location.href = "{{ route('ShowIndex') }}";
        });

    </script>
</x-template>
