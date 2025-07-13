@extends('layouts.app')
@section('content')

<div class="bg-slate-50 dark:bg-gray-900">
    <div class="w-full">
        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-16 lg:px-8 lg:py-24">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <p class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">Deploy faster</p>
                <h1 class="mt-2 text-3xl font-semibold tracking-tight text-gray-900 dark:text-white sm:text-4xl lg:text-6xl">Everything you need to deploy your app</h1>
            </div>

            <div class="mt-8 sm:mt-12 lg:mt-16 flex flex-col items-center gap-8 lg:grid lg:grid-cols-2 lg:items-stretch">
                <div class="w-full max-w-2xl lg:max-w-none rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-gray-200/75 dark:border-slate-700 flex flex-col">
                    <div class="p-4 sm:p-6">
                        <div class="aspect-video overflow-hidden rounded-xl">
                            <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-01-performance.png" alt="Performance graph" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="mt-auto px-4 pb-4 sm:px-6 sm:pb-6 lg:px-8">
                        <h4 class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Performance</h4>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Lightning-fast builds</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida justo et nulla efficitur, maximus egestas sem pellentesque.</p>
                    </div>
                </div>

                <div class="w-full max-w-2xl lg:max-w-none rounded-xl bg-white dark:bg-slate-800 shadow-sm border border-gray-200/75 dark:border-slate-700 flex flex-col">
                    <div class="p-4 sm:p-6">
                        <div class="aspect-video overflow-hidden rounded-xl">
                            <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-01-releases.png" alt="Releases interface" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="mt-auto px-4 pb-4 sm:px-6 sm:pb-6 lg:px-8">
                        <h4 class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Releases</h4>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Push to deploy</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida justo et nulla efficitur, maximus egestas sem pellentesque.</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 flex flex-col items-center gap-8 lg:grid lg:grid-cols-3 lg:items-stretch">
                <div class="w-full max-w-2xl lg:max-w-none rounded-xl bg-white dark:bg-slate-800 p-6 shadow-sm border border-gray-200 dark:border-slate-700 flex flex-col">
                    <div class="aspect-video overflow-hidden rounded-lg bg-slate-50 dark:bg-slate-700">
                        <img class="w-full h-full" src="https://tailwindcss.com/plus-assets/img/component-images/bento-01-speed.png" alt="Keyboard">
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Speed</p>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Built for power users</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400">Sed congue eros non finibus molestie. Vestibulum euismod augue.</p>
                    </div>
                </div>
                <!-- Karta 4 -->
                <div class="w-full max-w-2xl lg:max-w-none rounded-xl bg-white dark:bg-slate-800 p-6 shadow-sm border border-gray-200 dark:border-slate-700 flex flex-col">
                    <div class="aspect-video overflow-hidden rounded-lg bg-slate-50 dark:bg-slate-700">
                        <img class="object-contain w-full h-full" src="https://i.postimg.cc/8cvXgFXJ/Screenshot-2025-07-10-at-10-51-18-AM.png" alt="Integrations">
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Integrations</p>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Connect your favorite tools</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400">Maecenas at augue sed elit dictum vulputate, in nisi aliquam maximus arcu.</p>
                    </div>
                </div>
                <div class="w-full max-w-2xl lg:max-w-none rounded-xl bg-white dark:bg-slate-800 p-6 shadow-sm border border-gray-200 dark:border-slate-700 flex flex-col">
                    <div class="aspect-video overflow-hidden rounded-lg bg-slate-50 dark:bg-slate-700">
                        <img class="object-contain w-full h-full" src="https://tailwindcss.com/plus-assets/img/component-images/bento-01-network.png" alt="Network map">
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Network</p>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Globally distributed CDN</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400">Aenean vulputate justo commodo auctor vehicula in malesuada semper.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
