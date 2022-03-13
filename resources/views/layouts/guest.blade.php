<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <style>
        .tabulator-pages button.active {
            background-color: #1a202c !important;
            color: #fff !important;
        }
        .tabulator-page-size {
            width: 70px !important;
        }
    </style>
</head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex w-full flex-wrap items-center text-base md:ml-auto">
                <a href="{{ route("tabulator.index") }}" class="mr-5 hover:text-gray-900 {{ request()->route()->getName() === "tabulator.index" ? "underline" : "" }}">Índice</a>
                <a href="{{ route("tabulator.basic") }}" class="mr-5 hover:text-gray-900 {{ request()->route()->getName() === "tabulator.basic" ? "underline" : "" }}">Básico</a>
                <a href="{{ route("tabulator.localization") }}" class="mr-5 hover:text-gray-900 {{ request()->route()->getName() === "tabulator.localization" ? "underline" : "" }}">Localización</a>
                <a href="{{ route("tabulator.column-filter") }}" class="mr-5 hover:text-gray-900 {{ request()->route()->getName() === "tabulator.column-filter" ? "underline" : "" }}">Filtrado por columnas</a>
                <a href="{{ route("tabulator.global-filter") }}" class="mr-5 hover:text-gray-900 {{ request()->route()->getName() === "tabulator.global-filter" ? "underline" : "" }}">Filtros globales</a>
                <a href="{{ route("tabulator.sorters") }}" class="mr-5 hover:text-gray-900 {{ request()->route()->getName() === "tabulator.sorters" ? "underline" : "" }}">Ordenaciones</a>
                <a href="{{ route("tabulator.export") }}" class="hover:text-gray-900 {{ request()->route()->getName() === "tabulator.export" ? "underline" : "" }}">Export</a>
            </nav>
        </div>
    </header>

    {{ $tabulator }}

    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>
</body>
</html>
