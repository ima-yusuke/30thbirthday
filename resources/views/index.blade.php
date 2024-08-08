<x-template title="Birthday">
    <section id="test" class="hide opacity-0">
        {{--トップ画面--}}
        <x-top-component></x-top-component>

        {{--サイトについて--}}
        <x-about-component2></x-about-component2>

        {{--プロフィール--}}
        <x-profile-component></x-profile-component>

        {{--しおり--}}
        <x-itinerary-component></x-itinerary-component>

        {{--アルバムパート--}}
        <x-album-component :albumData="$albumData"></x-album-component>
    </section>
</x-template>
<script>
    document.getElementById("test").classList.add('fade-in');
    document.getElementById("test").classList.remove('hide');
</script>
