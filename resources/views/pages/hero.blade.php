@extends('layouts.app')

@section('content')
    <div class="bg-white dark:bg-slate-900">
        <div class="relative isolate overflow-hidden">
            <div class="absolute inset-0 -z-10 grid-background1" aria-hidden="true"></div>
            <div class="absolute inset-0 -z-10 center-glow" aria-hidden="true"></div>

            <div class="mx-auto max-w-7xl px-6 pb-24 pt-10 sm:pb-32 lg:flex lg:px-8 lg:py-40">
                <div class="mx-auto max-w-2xl flex-shrink-0 lg:mx-0 lg:max-w-xl lg:pt-8">
                    <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600"
                         alt="Tailwind CSS"
                         class="h-11 w-auto">

                    <div class="mt-24 sm:mt-32 lg:mt-16">
                        <a href="#" class="inline-flex space-x-6">
                            <span class="rounded-full bg-indigo-600/10 px-3 py-1 text-sm font-semibold leading-6 text-indigo-600 ring-1 ring-inset ring-indigo-600/10 dark:bg-indigo-500/10 dark:text-indigo-400 dark:ring-indigo-500/20">What's new</span>
                            <span class="inline-flex items-center space-x-2 text-sm font-medium leading-6 text-gray-600 dark:text-slate-400">
                            <span>Just shipped v1.0</span>
                            <svg class="h-5 w-5 text-gray-400 dark:text-slate-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        </a>
                    </div>

                    <h1 class="mt-10 text-4xl font-semibold tracking-tight text-gray-900 dark:text-white sm:text-6xl">
                        Deploy to the cloud with confidence
                    </h1>

                    <p class="mt-6 text-lg leading-8 text-gray-600 dark:text-slate-400">
                        Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat.
                    </p>

                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="#" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Get started
                        </a>
                        <a href="#" class="text-sm font-semibold leading-6 text-gray-900 dark:text-white">
                            Learn more <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>

                <div class="mx-auto mt-16 flex max-w-2xl sm:mt-24 lg:ml-10 lg:mr-0 lg:mt-0 lg:max-w-none lg:flex-none xl:ml-32">
                    <div class="max-w-3xl flex-none sm:max-w-5xl lg:max-w-none">
                        <div class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 dark:ring-white/10 lg:-m-4 lg:rounded-2xl lg:p-4">

                            <picture>
                                <source srcset="https://tailwindcss.com/plus-assets/img/component-images/dark-project-app-screenshot.png" media="(prefers-color-scheme: dark)">
                                <img src="https://tailwindcss.com/plus-assets/img/component-images/project-app-screenshot.png" alt="App screenshot" width="2432" height="1000" class="w-[65rem] rounded-md shadow-2xl ring-1 ring-gray-900/10 dark:ring-white/10">
                            </picture>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
