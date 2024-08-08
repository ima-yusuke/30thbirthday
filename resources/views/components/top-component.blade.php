<section class="relative w-full min-h-screen flex justify-center items-center bg-top-gray">
    <!-- Image Container -->
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-[100vh] flex justify-center items-end">
        <img src="{{ asset('storage/img/flower-take.png') }}" alt="flower" class="w-full h-full object-cover">
    </div>

    <!-- H1 Element Positioned Above the Image -->
    <h1 class="relative mb-28 text-9xl text-white blur-effect">
        8.18
        <!-- Custom Blurred Spots -->
        <span class="absolute bottom-0 left-0 w-16 h-16 rounded-full water"></span>
        <span class="absolute top-0 right-0 w-16 h-16 rounded-full water"></span>
    </h1>

    <!-- Scroll Animation Text -->
    <p class="scroll-animation mb-8 text-xl text-white">scroll</p>

    <!-- Title Text -->
    <p class="absolute -left-4 text-xs text-top-black top-title">30th Birthday</p>
</section>

<div class="blurred-background-off absolute top-0 left-0 w-full h-screen"></div>

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
