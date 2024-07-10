<x-template title="Birthday">

    {{--トップ画面--}}
    <x-top-component></x-top-component>

    {{--サイトについて--}}
    <x-about-component2></x-about-component2>

    {{--プロフィール--}}
    <x-profile-component></x-profile-component>

    {{--アルバムパート--}}
    <x-album-component :albumData="$albumData"></x-album-component>
</x-template>
