<section class="relative w-full min-h-screen flex justify-center items-center bg-top-gray">
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full">
        <img src="{{ asset('storage/img/flower-take.png') }}" alt="flower" class="w-full h-[700px] object-cover">
    </div>
    <div class="absolute inset-0 flex flex-col justify-center items-center text-center text-white">
        <aside class="flex flex-col justify-center items-center gap-2">
            <h1 class="text-8xl text-top-white">8.18</h1>
            <p class="text-xl top-title flex overflow-hidden">
                <span>3</span>
                <span>0</span>
                <span>t</span>
                <span class="mr-2">h</span>
                <span>B</span>
                <span>i</span>
                <span>r</span>
                <span>t</span>
                <span>h</span>
                <span>d</span>
                <span>a</span>
                <span>y</span>
            </p>
        </aside>
        <div class="scroll-animation mb-8 text-xl">
            scroll
        </div>
    </div>
</section>

<script>
    const CLASSNAME = "-visible";
    const TIMEOUT = 1500;
    const target = document.getElementsByClassName("top-title")[0];

    setInterval(() => {
        target.classList.add(CLASSNAME);
        setTimeout(() => {
            target.classList.remove(CLASSNAME);
        }, TIMEOUT);
    }, TIMEOUT * 2);
</script>
