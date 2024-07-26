<!DOCTYPE html>
<html lang="ja">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/app.css','resources/js/side-menu.js'])
</x-head>
<div>
    @if($title!="Birthday")
        <x-header>

        </x-header>
    @endif

    <body id="body">
        <x-side-menu></x-side-menu>
        {{ $slot }}
    </body>
{{--    <x-footer>--}}

{{--    </x-footer>--}}
</div>

</html>
