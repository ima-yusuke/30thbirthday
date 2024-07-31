<!DOCTYPE html>
<html lang="ja">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/app.css','resources/css/index-top.css','resources/css/index-about.css','resources/css/index-profile.css','resources/css/index-album.css','resources/css/side-menu.css','resources/js/side-menu.js',
           'resources/css/index-itinerary.css'])
</x-head>
<div>
    @if($title!="Birthday")
        <x-header></x-header>
    @endif

    <body id="body">
        <x-side-menu></x-side-menu>
        {{ $slot }}
    </body>
</div>

</html>
