@extends('layouts.app')
@section('content')

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="mb-10">
            <a href="#" class="text-sm text-indigo-600 font-medium dark:text-indigo-400">Deploy faster</a>
            <h1 class="text-4xl font-bold mt-2">Everything you need to deploy your app</h1>
        </div>
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div class="border rounded-xl shadow overflow-hidden min-w-full dark:bg-gray-800 dark:border-gray-700">
                <img src="https://i.postimg.cc/Hk4ykck1/bento-01-performance.png" alt="Performance" class="w-[599.98px] h-[320px] object-cover mx-auto" />
                <div class="pt-4 px-10 pb-10">
                    <h3 class="text-sm text-indigo-600 font-semibold dark:text-indigo-400">Performance</h3>
                    <h2 class="font-semibold text-gray-800 dark:text-white mt-1">Lightning-fast builds</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mt-2 mb-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In gravida justo et nulla efficitur.
                    </p>
                </div>
            </div>
            <div class="border rounded-xl shadow overflow-hidden min-w-full dark:bg-gray-800 dark:border-gray-700">
                <img src="https://i.postimg.cc/5NzK9VQW/bento-02-releases.png" alt="Releases" class="w-[600px] h-[320px] object-cover mx-auto" />
                <div class="pt-4 px-10 pb-10">
                    <h3 class="text-sm text-indigo-600 font-semibold dark:text-indigo-400">Releases</h3>
                    <h2 class="font-semibold text-gray-800 dark:text-white mt-1">Push to deploy</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mt-2 mb-0">
                        Curabitur auctor, eros arcu rhoncus massa, laoreet dapibus ex elit vitae odio.
                    </p>
                </div>
            </div>
        </div>
        <div class="grid gap-6 lg:grid-cols-3">
            <div class="border rounded-xl shadow overflow-hidden min-w-full dark:bg-gray-800 dark:border-gray-700">
                <img src="https://i.postimg.cc/0ydtm0Ct/bento-03-speed.png" alt="Speed" class="w-[394.66px] h-[320px] object-cover mx-auto" />
                <div class="pt-4 px-10 pb-10">
                    <h3 class="text-sm text-indigo-600 font-semibold dark:text-indigo-400">Speed</h3>
                    <h2 class="font-semibold text-gray-800 dark:text-white mt-1">Built for power users</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mt-2 mb-0">
                        Sed congue eros non finibus molestie. Vestibulum euismod augue.
                    </p>
                </div>
            </div>
            <div class="border rounded-xl shadow overflow-hidden min-w-full dark:bg-gray-800 dark:border-gray-700">
                <img src="https://i.postimg.cc/5t4smQ7f/bento-04-integrations.png" alt="Integrations" class="w-[394.67px] h-[320px] object-cover mx-auto" />
                <div class="pt-4 px-10 pb-10">
                    <h3 class="text-sm text-indigo-600 font-semibold dark:text-indigo-400">Integrations</h3>
                    <h2 class="font-semibold text-gray-800 dark:text-white mt-1">Connect your favorite tools</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mt-2 mb-0">
                        Maecenas at augue sed elit dictum vulputate.
                    </p>
                </div>
            </div>
            <div class="border rounded-xl shadow overflow-hidden min-w-full dark:bg-gray-800 dark:border-gray-700">
                <img src="https://i.postimg.cc/q71jDBSy/bento-05-network.png" alt="Network" class="w-[394.66px] h-[320px] object-cover mx-auto" />
                <div class="pt-4 px-10 pb-10">
                    <h3 class="text-sm text-indigo-600 font-semibold dark:text-indigo-400">Network</h3>
                    <h2 class="font-semibold text-gray-800 dark:text-white mt-1">Globally distributed CDN</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-300 mt-2 mb-0">
                        Aenean vulputate justo commodo auctor vehicula.
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
