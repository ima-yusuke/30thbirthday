<!DOCTYPE html>
<html lang="ja">
<x-head :title="$title">
    @if(isset($description))
        <meta name="description" content="{{ $description }}"/>
    @endif
    @vite(['resources/css/app.css'])
</x-head>
<div>
    @if($title!="Birthday")
        <x-header>

        </x-header>
    @endif

    <body id="body">
        {{ $slot }}
    </body>
{{--    <x-footer>--}}

{{--    </x-footer>--}}
</div>

</html>
