<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      x-data="{ isDarkMode: localStorage.getItem('darkMode') === 'true' || (localStorage.getItem('darkMode') !== 'false' && window.matchMedia('(prefers-color-scheme: dark)').matches) }"
      x-init="$watch('isDarkMode', val => localStorage.setItem('darkMode', val))"
      :class="{ 'dark': isDarkMode }">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white dark:bg-slate-900 text-gray-900 dark:text-gray-100">

<main>
    @yield('content')
</main>

</body>
</html>
