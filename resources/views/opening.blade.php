<x-template title="Birthday">
    <img src="{{ asset('storage/img/top-flower.jpg') }}" class="min-h-screen w-full object-cover">
    <section class="hidden top-text absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
        <article class="text-top-black flex flex-col items-center gap-4">
            <h1 class="text-2xl">Happy Birthday</h1>
            <div class="flex flex-col items-center gap-1">
                <p class="text-base">Chihaya Takeuchi</p>
                <p>2024.08.18</p>
            </div>
        </article>
    </section>
    <button type="button" id="open-birthday" class="hidden top-text hover:cursor-pointer text-top-black absolute bottom-6 left-1/2 transform -translate-x-1/2">NEXT →</button>

    <script>
        const BUTTON = document.getElementById("open-birthday");

        BUTTON.addEventListener('click', function() {
            window.location.href = "{{ route('ShowIndex') }}";
        });

        document.addEventListener('DOMContentLoaded', function () {
            const elements = document.getElementsByClassName('top-text');

            setTimeout(function() {
                for(let i = 0; i < elements.length; i++) {
                    elements[i].classList.remove('hidden');
                    elements[i].classList.add('fade-in-element');
                }
            }, 1000); // 1秒後にアニメーション開始
        });

    </script>
</x-template>
