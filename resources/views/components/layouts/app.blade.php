<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="bg-stone-200">
        <div class="container bg-stone-300 mx-auto px-4 py-2 rounded-lg w-3/4 mt-2">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
