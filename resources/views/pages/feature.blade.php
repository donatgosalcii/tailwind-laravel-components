@extends('layouts.app')

@section('content')
    <section x-data="{ isDarkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }"
             x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => isDarkMode = e.matches)"
             :class="{ 'dark': isDarkMode }"
             class="bg-white dark:bg-slate-900 py-24 sm:py-32">

        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-start lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">
                    Deploy faster
                </h2>

                <p class="mt-2 text-4xl font-semibold tracking-tight text-slate-900 dark:text-white sm:text-6xl">
                    Everything you need to deploy your app
                </p>

                <p class="mt-6 text-lg leading-8 text-slate-600 dark:text-slate-300">
                    Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.
                </p>
            </div>

            <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
                <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none md:grid-cols-1 lg:grid-cols-3">

                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-slate-900 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="h-6 w-6 flex-shrink-0 text-indigo-600 dark:text-indigo-400">
                                <path fill-rule="evenodd"
                                      d="M11.47 2.47a.75.75 0 011.06 0l4.5 4.5a.75.75 0 01-1.06 1.06l-3.22-3.22V16.5a.75.75 0 01-1.5 0V4.81L8.03 8.03a.75.75 0 01-1.06-1.06l4.5-4.5zM3 15.75a.75.75 0 01.75.75v2.25a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5V16.5a.75.75 0 011.5 0v2.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V16.5a.75.75 0 01.75-.75z"
                                      clip-rule="evenodd" />
                            </svg>
                            Push to deploy
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-slate-600 dark:text-slate-300">
                            <p class="flex-auto">Commodo nec sagittis tortor mauris sed. Turpis tortor quis scelerisque diam id accumsan nullam tempus. Pulvinar etiam lacus volutpat eu.</p>
                            <p class="mt-6">
                                <a href="#" class="text-sm font-semibold leading-6 text-indigo-600 dark:text-indigo-400">Learn more <span aria-hidden="true">→</span></a>
                            </p>
                        </dd>
                    </div>

                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-slate-900 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="h-6 w-6 flex-shrink-0 text-indigo-600 dark:text-indigo-400">
                                <path fill-rule="evenodd"
                                      d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z"
                                      clip-rule="evenodd" />
                            </svg>
                            SSL certificates
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-slate-600 dark:text-slate-300">
                            <p class="flex-auto">Pellentesque enim a commodo malesuada turpis eleifend risus. Facilisis donec placerat sapien consequat tempor fermentum nibh.</p>
                            <p class="mt-6">
                                <a href="#" class="text-sm font-semibold leading-6 text-indigo-600 dark:text-indigo-400">Learn more <span aria-hidden="true">→</span></a>
                            </p>
                        </dd>
                    </div>

                    <div class="flex flex-col">
                        <dt class="flex items-center gap-x-3 text-base font-semibold leading-7 text-slate-900 dark:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                 class="h-6 w-6 flex-shrink-0 text-indigo-600 dark:text-indigo-400">
                                <path fill-rule="evenodd"
                                      d="M4.755 10.059a7.5 7.5 0 0112.548-3.364l1.903 1.903h-4.518a.75.75 0 010-1.5h6.198a.75.75 0 01.53 1.28l-2.353 2.353a.75.75 0 01-1.06 0l-1.903-1.903a6 6 0 00-9.564 2.684.75.75 0 11-1.408-.536zM18.245 13.941a7.5 7.5 0 01-12.548 3.364l-1.903-1.903h4.518a.75.75 0 010 1.5H3.052a.75.75 0 01-.53-1.28l2.353-2.353a.75.75 0 011.06 0l1.903 1.903a6 6 0 009.564-2.684.75.75 0 111.408.536z"
                                      clip-rule="evenodd" />
                            </svg>
                            Simple queues
                        </dt>
                        <dd class="mt-4 flex flex-auto flex-col text-base leading-7 text-slate-600 dark:text-slate-300">
                            <p class="flex-auto">Pellentesque sit elit congue ante nec amet. Dolor aenean curabitur viverra suspendisse iaculis eget. Nec mollis placerat ultricies euismod.</p>
                            <p class="mt-6">
                                <a href="#" class="text-sm font-semibold leading-6 text-indigo-600 dark:text-indigo-400">Learn more <span aria-hidden="true">→</span></a>
                            </p>
                        </dd>
                    </div>

                </dl>
            </div>
        </div>
    </section>
@endsection
