@extends('layouts.app')

@section('content')
    <div class="bg-white dark:bg-slate-900">
        <div class="mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8 lg:py-40">
            <div class="mx-auto max-w-4xl">
                <h2 class="text-4xl font-bold leading-10 tracking-tight text-gray-900 dark:text-white">
                    Frequently asked questions
                </h2>

                <dl class="mt-10 space-y-6 divide-y divide-gray-900/10 dark:divide-white/10">
                    <div x-data="{ open: false }" class="pt-6">
                        <dt>
                            <button @click="open = !open" type="button"
                                    class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                <span class="text-base font-semibold leading-7">What's the best thing about Switzerland?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                                    </svg>
                                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 6v12m6-6H6" />
                                    </svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-collapse class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">
                                I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Quas cupiditate laboriosam fugiat.
                            </p>
                        </dd>
                    </div>

                    <div x-data="{ open: false }" class="pt-6 border-t-0">
                        <dt>
                            <button @click="open = !open" type="button" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                <span class="text-base font-semibold leading-7">How do you make holy water?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
                                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-collapse class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                        </dd>
                    </div>

                    <div x-data="{ open: false }" class="pt-6">
                        <dt>
                            <button @click="open = !open" type="button" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                <span class="text-base font-semibold leading-7">What do you call someone with no body and no nose?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
                                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-collapse class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                        </dd>
                    </div>

                    <div x-data="{ open: false }" class="pt-6">
                        <dt>
                            <button @click="open = !open" type="button" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                <span class="text-base font-semibold leading-7">Why do you never see elephants hiding in trees?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
                                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-collapse class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                        </dd>
                    </div>
                    <div x-data="{ open: false }" class="pt-6">
                        <dt>
                            <button @click="open = !open" type="button" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                <span class="text-base font-semibold leading-7">Why can't you hear a pterodactyl go to the bathroom?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
                                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-collapse class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">Because the "P" is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                        </dd>
                    </div>
                    <div x-data="{ open: false }" class="pt-6">
                        <dt>
                            <button @click="open = !open" type="button" class="flex w-full items-start justify-between text-left text-gray-900 dark:text-white">
                                <span class="text-base font-semibold leading-7">Why did the invisible man turn down the job offer?</span>
                                <span class="ml-6 flex h-7 items-center">
                                    <svg x-show="open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" /></svg>
                                    <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m6-6H6" /></svg>
                                </span>
                            </button>
                        </dt>
                        <dd x-show="open" x-collapse class="mt-2 pr-12">
                            <p class="text-base leading-7 text-gray-600 dark:text-gray-300">He couldn't see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.</p>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
