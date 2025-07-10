@extends('layouts.app')

@section('content')
    <section x-data="{ isDarkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }"
             x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => isDarkMode = e.matches)"
             :class="{ 'dark': isDarkMode }"
             class="bg-white py-24 dark:bg-slate-900 sm:py-32">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">

            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-4xl">From the blog</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600 dark:text-gray-300">
                    Learn how to grow your business with our expert advice.
                </p>
            </div>

            <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                <article class="flex flex-col items-start justify-between">
                    <div class="relative w-full">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&auto=format&fit=crop&w=3603&q=80"
                                 alt="Desk with keyboard, mouse, and other accessories"
                                 class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10"></div>
                        </a>
                    </div>
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-16" class="text-gray-500 dark:text-gray-400">Mar 16, 2020</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">Marketing</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Boost your conversion rate
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">
                                Illo sint voluptas. Error voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed exercitationem placeat consectetur nulla...
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="Michael Foster"
                                 class="h-10 w-10 rounded-full bg-gray-100">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900 dark:text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Michael Foster
                                    </a>
                                </p>
                                <p class="text-gray-600 dark:text-gray-400">Co-Founder / CTO</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="flex flex-col items-start justify-between">
                    <div class="relative w-full">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-4.0.3&auto=format&fit=crop&w=3270&q=80"
                                 alt="Laptop on a wooden desk by a window with a forest view"
                                 class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10"></div>
                        </a>
                    </div>
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-10" class="text-gray-500 dark:text-gray-400">Mar 10, 2020</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">Sales</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    How to use search engine optimization to drive sales
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">
                                Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="Lindsay Walton"
                                 class="h-10 w-10 rounded-full bg-gray-100">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900 dark:text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Lindsay Walton
                                    </a>
                                </p>
                                <p class="text-gray-600 dark:text-gray-400">Front-end Developer</p>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="flex flex-col items-start justify-between">
                    <div class="relative w-full">
                        <a href="#">
                            <img src="https://images.unsplash.com/photo-1547586696-ea22b4d4235d?ixlib=rb-4.0.3&auto=format&fit=crop&w=3270&q=80"
                                 alt="Laptop on a wooden desk by a window with a forest view"
                                 class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                            <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10 dark:ring-white/10"></div>
                        </a>
                    </div>
                    <div class="max-w-xl">
                        <div class="mt-8 flex items-center gap-x-4 text-xs">
                            <time datetime="2020-03-10" class="text-gray-500 dark:text-gray-400">Mar 10, 2020</time>
                            <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700">Sales</a>
                        </div>
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 dark:text-white dark:group-hover:text-gray-300">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    How to use search engine optimization to drive sales
                                </a>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600 dark:text-gray-400">
                                Optio cum necessitatibus dolor voluptatum provident commodi et. Qui aperiam fugiat nemo cumque.
                            </p>
                        </div>
                        <div class="relative mt-8 flex items-center gap-x-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="Lindsay Walton"
                                 class="h-10 w-10 rounded-full bg-gray-100">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900 dark:text-white">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Lindsay Walton
                                    </a>
                                </p>
                                <p class="text-gray-600 dark:text-gray-400">Front-end Developer</p>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>
@endsection
