@extends('layouts.app')
@section('content')

<div class="bg-slate-50 dark:bg-gray-900">
<div class="w-full">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
        <div class="mx-auto max-w-2xl lg:mx-0">
            <p class="text-base font-semibold leading-7 text-indigo-600 dark:text-indigo-400">Deploy faster</p>
            <h1 class="mt-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-6xl">Everything you need to deploy your app</h1>
        </div>
        <div class="mt-16 grid grid-cols-1 xl:grid-cols-2 gap-8">
            <div>
                <div class="rounded-xl bg-white dark:bg-slate-800 p-6 sm:p-8 shadow-sm border border-gray-200/75 dark:border-slate-700 h-full flex flex-col">
                    <div>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="text" name="search" id="search" class="block w-full rounded-md border-0 py-2 pl-10 text-gray-900 dark:text-white bg-white dark:bg-slate-700 ring-1 ring-inset ring-gray-300 dark:ring-slate-600 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Search something...">
                        </div>
                        <div class="mt-4 border-b border-gray-200 dark:border-slate-700">
                            <nav class="-mb-px flex space-x-8 overflow-x-auto" aria-label="Tabs">
                                <a href="#" class="border-indigo-600 text-indigo-600 dark:border-indigo-500 dark:text-indigo-400 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium" aria-current="page">Overview</a>
                                <a href="#" class="border-transparent text-gray-500 dark:text-slate-400 hover:border-gray-300 dark:hover:border-slate-500 hover:text-gray-700 dark:hover:text-slate-300 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">Activity</a>
                                <a href="#" class="border-transparent text-gray-500 dark:text-slate-400 hover:border-gray-300 dark:hover:border-slate-500 hover:text-gray-700 dark:hover:text-slate-300 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">Settings</a>
                                <a href="#" class="border-transparent text-gray-500 dark:text-slate-400 hover:border-gray-300 dark:hover:border-slate-500 hover:text-gray-700 dark:hover:text-slate-300 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">Collaborators</a>
                                <a href="#" class="border-transparent text-gray-500 dark:text-slate-400 hover:border-gray-300 dark:hover:border-slate-500 hover:text-gray-700 dark:hover:text-slate-300 whitespace-nowrap border-b-2 py-4 px-1 text-sm font-medium">Notifications</a>
                            </nav>
                        </div>
                    </div>
                    <div class="mt-6">
                        <div class="flex items-center space-x-2">
                            <span class="flex h-2 w-2"><span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span></span>
                            <span class="text-lg font-semibold text-gray-900 dark:text-white">Planetary</span>
                            <span class="text-gray-300 dark:text-gray-600">/</span>
                            <span class="text-lg font-semibold text-gray-900 dark:text-white">mobile-api</span>
                        </div>
                        <p class="mt-1 text-sm text-gray-500 dark:text-slate-400">Deploys from GitHub via <span class="font-medium text-gray-700 dark:text-slate-300">main</span> branch</p>
                    </div>
                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-y-6 border-y border-gray-200 dark:border-slate-700 py-8">
                        <div>
                            <p class="text-sm font-medium text-gray-500 dark:text-slate-400">Number of deploys</p>
                            <p class="mt-1 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">405</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-500 dark:text-slate-400">Avg deploy time</p>
                            <p class="mt-1 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">3.65<span class="text-2xl font-medium text-gray-500 dark:text-slate-400 ml-1.5">mins</span></p>
                        </div>
                    </div>
                    <div class="mt-auto pt-8">
                        <h4 class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Performance</h4>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Lightning-fast builds</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida justo et nulla efficitur, maximus egestas sem pellentesque.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="rounded-xl bg-white dark:bg-slate-800 p-6 sm:p-8 shadow-sm border border-gray-200/75 dark:border-slate-700 h-full flex flex-col">
                    <div class="divide-y divide-gray-200 dark:divide-slate-700">
                        <div class="grid grid-cols-12 items-baseline pb-4">
                            <div class="col-span-4 flex items-center space-x-2 text-sm font-medium text-gray-500 dark:text-slate-400 pr-4">
                                <span>Sort by</span>
                                <svg class="h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" /></svg>
                            </div>
                            <div class="col-span-8 flex justify-between items-baseline border-l border-gray-200 dark:border-slate-700 pl-4">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Activity feed</h3>
                                <a href="#" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">View all</a>
                            </div>
                        </div>
                        <div class="pt-4">
                            <div class="grid grid-cols-12 items-center py-4 opacity-50 hover:opacity-100 transition">
                                <div class="col-span-4 pr-4">
                                    <button class="flex w-full items-center justify-between rounded-full border border-dotted border-gray-400 dark:border-gray-600 bg-white dark:bg-slate-800 px-4 py-1.5 text-left text-sm font-medium text-gray-500 dark:text-slate-400">
                                        <span>Preview</span>
                                        <svg class="h-5 w-5 text-gray-400 dark:text-gray-500 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
                                    </button>
                                </div>
                                <div class="col-span-8 border-l border-gray-200 dark:border-slate-700 pl-4">
                                    <div class="flex items-center justify-between"><div class="flex items-center gap-x-3"><img class="h-8 w-8 rounded-full bg-gray-50 dark:bg-gray-700" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Cosetta Dusett's avatar"><div class="text-sm leading-5"><p class="font-medium text-gray-900 dark:text-white">Cosetta Dusett</p><p class="text-gray-500 dark:text-slate-400">Pushed to ios-app (27c83j on main)</p></div></div><time class="flex-none text-xs leading-5 text-gray-400 dark:text-slate-500">30s</time></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 items-center py-4 border-y border-gray-200 dark:border-slate-700">
                                <div class="col-span-4 pr-4">
                                    <button class="flex w-full items-center justify-between rounded-full border border-indigo-200 dark:border-indigo-900 bg-indigo-50 dark:bg-indigo-950/40 px-4 py-1.5 text-left text-sm font-medium text-indigo-700 dark:text-indigo-300 hover:bg-indigo-100 dark:hover:bg-indigo-950/60">
                                        <span>Production</span>
                                        <svg class="h-5 w-5 text-indigo-400 dark:text-indigo-500 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
                                    </button>
                                </div>
                                <div class="col-span-8 border-l border-gray-200 dark:border-slate-700 pl-4">
                                    <div class="flex items-center justify-between"><div class="flex items-center gap-x-3"><img class="h-8 w-8 rounded-full bg-gray-50 dark:bg-gray-700" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Pammi Kokani's avatar"><div class="text-sm leading-5"><p class="font-medium text-gray-900 dark:text-white">Pammi Kokani</p><p class="text-gray-500 dark:text-slate-400">Pushed to mobile-api (29jsd on main)</p></div></div><time class="flex-none text-xs leading-5 text-gray-400 dark:text-slate-500">3m</time></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 items-center py-4 opacity-50 hover:opacity-100 transition">
                                <div class="col-span-4 pr-4">
                                    <button class="flex w-full items-center justify-between rounded-full border border-dotted border-gray-400 dark:border-gray-600 bg-white dark:bg-slate-800 px-4 py-1.5 text-left text-sm font-medium text-gray-500 dark:text-slate-400">
                                        <span>Preview</span>
                                        <svg class="h-5 w-5 text-gray-400 dark:text-gray-500 ml-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" /></svg>
                                    </button>
                                </div>
                                <div class="col-span-8 border-l border-gray-200 dark:border-slate-700 pl-4">
                                    <div class="flex items-center justify-between"><div class="flex items-center gap-x-3"><img class="h-8 w-8 rounded-full bg-gray-50 dark:bg-gray-700" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Kora Grisostomo's avatar"><div class="text-sm leading-5"><p class="font-medium text-gray-900 dark:text-white">Kora Grisostomo</p><p class="text-gray-500 dark:text-slate-400">Pushed to ios-app (cdd2d on main)</p></div></div><time class="flex-none text-xs leading-5 text-gray-400 dark:text-slate-500">4m</time></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-auto pt-8 border-t border-gray-200 dark:border-slate-700">
                        <h4 class="text-sm font-semibold text-indigo-600 dark:text-indigo-400">Releases</h4>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Push to deploy</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400 leading-relaxed">Curabitur auctor, ex quis auctor venenatis, eros arcu rhoncus massa, laoreet dapibus ex elit vitae odio.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-3">
            <div class="lg:col-span-1">
                <div class="rounded-xl bg-white dark:bg-slate-800 p-6 shadow-sm border border-gray-200 dark:border-slate-700 h-full flex flex-col">
                    <div class="flex-grow bg-slate-50 dark:bg-slate-700 rounded-lg flex items-center justify-center p-4">
                        <img class="object-contain w-full h-full" src="https://i.postimg.cc/L4VNLpKM/Screenshot-2025-07-10-at-10-46-44-AM.png" alt="A partial view of a modern keyboard with certain keys highlighted.">
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Speed</p>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Built for power users</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400">Sed congue eros non finibus molestie. Vestibulum euismod augue.</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1">
                <div class="rounded-xl bg-white dark:bg-slate-800 p-6 shadow-sm border border-gray-200 dark:border-slate-700 h-full flex flex-col">
                    <div class="flex-grow bg-slate-50 dark:bg-slate-700 rounded-lg flex items-center justify-center p-4">
                        <img class="object-contain w-full h-full" src="https://i.postimg.cc/8cvXgFXJ/Screenshot-2025-07-10-at-10-51-18-AM.png" alt="Icons of popular applications like Gmail, Slack, and Teams arranged in circles.">
                    </div>
                    <div class="mt-6">
                        <p class="text-base font-semibold text-indigo-600 dark:text-indigo-400">Integrations</p>
                        <h3 class="mt-1 text-lg font-semibold text-gray-900 dark:text-white">Connect your favorite tools</h3>
                        <p class="mt-2 text-base text-gray-600 dark:text-slate-400">Maecenas at augue sed elit dictum vulputate, in nisi aliquam maximus arcu.</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-1">
                <div class="rounded-xl bg-white dark:bg-slate-800 p-6 shadow-sm border border-gray-200 dark:border-slate-700 h-full flex flex-col">
                    <div class="flex-grow bg-slate-50 dark:bg-slate-700 rounded-lg flex items-center justify-center p-4">
                        <img class="object-contain w-full h-full" src="https://i.postimg.cc/cLvmptKs/Screenshot-2025-07-10-at-10-53-08-AM.png" alt="A dotted map of a continent with user avatars pinned in various locations.">
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
</div>
@endsection
