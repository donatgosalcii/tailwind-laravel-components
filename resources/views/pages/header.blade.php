@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-start min-h-screen bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300 " x-data="{ isDarkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }"
         x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => isDarkMode = e.matches)"
         :class="{ 'dark': isDarkMode }"
         class="flex items-center justify-center min-h-screen bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">

        <div class="text-left px-6 py-12 md:px-8">
            <h3 class="font-bold tracking-tight text-gray-900 dark:text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl">
                Support Center
            </h3>
            <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-400 max-w-3xl sm:text-xl">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.
            </p>
        </div>
    </div>
@endsection
