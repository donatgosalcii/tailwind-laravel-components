@extends('layouts.app')

@section('content')

    <div class="bg-gray-100 min-h-screen flex items-start justify-center pt-20 sm:pt-24">

        <div x-data="{ open: false }" @click.away="open = false" class="relative">

            <button
                @click="open = !open"
                type="button"
                class="inline-flex items-center gap-x-1.5 text-sm font-semibold text-gray-900 hover:text-indigo-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-600 focus-visible:rounded-sm"
                :aria-expanded="open"
            >
                <span>Solutions</span>
                <svg class="h-5 w-5 text-gray-400 transition-transform duration-200" :class="{'rotate-180': open}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.94l3.71-3.71a.75.75 0 111.06 1.06l-4.25 4.25a.75.75 0 01-1.06 0L5.23 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
            </button>

            <div
                x-show="open"

                class="absolute left-1/2 z-10 mt-3 w-screen max-w-md -translate-x-1/2 px-4 sm:px-0 lg:max-w-3xl"
                style="display: none;"
            >
                <div class="overflow-hidden rounded-2xl bg-white shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="relative grid gap-8 p-7 lg:grid-cols-2">

                        <a href="#" class="group -m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-700 transition duration-150 ease-in-out group-hover:bg-indigo-50 group-hover:text-indigo-600 sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001a4.992 4.992 0 0 1-4.992 4.992h-.001a4.992 4.992 0 0 1-4.992-4.992v-.001h4.992a2.992 2.992 0 0 0 2.992-2.992Zm-3.004-6.354a2.992 2.992 0 0 0-2.992-2.992h-.001a4.992 4.992 0 0 0-4.992 4.992v.001h4.992a2.992 2.992 0 0 1 2.992-2.992Zm-7.493 9.348a2.992 2.992 0 0 0-2.992 2.992h-.001a4.992 4.992 0 0 0 4.992 4.992v-.001h4.992a2.992 2.992 0 0 1-2.992 2.992Zm8.991-8.991a2.992 2.992 0 0 0-2.992-2.992h-.001a4.992 4.992 0 0 0-4.992 4.992v.001h4.992a2.992 2.992 0 0 1 2.992-2.992Z"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Analytics</p>
                                <p class="mt-1 text-sm text-gray-500">Get a better understanding of your traffic</p>
                            </div>
                        </a>

                        <a href="#" class="group -m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-700 transition duration-150 ease-in-out group-hover:bg-indigo-50 group-hover:text-indigo-600 sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25A2.25 2.25 0 0 1 13.5 8.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Integrations</p>
                                <p class="mt-1 text-sm text-gray-500">Connect with third-party tools and find out expectations</p>
                            </div>
                        </a>

                        <a href="#" class="group -m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-700 transition duration-150 ease-in-out group-hover:bg-indigo-50 group-hover:text-indigo-600 sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456Z"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Engagement</p>
                                <p class="mt-1 text-sm text-gray-500">Speak directly to your customers with our engagement tool</p>
                            </div>
                        </a>

                        <a href="#" class="group -m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-700 transition duration-150 ease-in-out group-hover:bg-indigo-50 group-hover:text-indigo-600 sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001a4.992 4.992 0 0 1-4.992 4.992h-.001M16.023 9.348C16.023 6.368 13.655 4 10.678 4s-4.992 2.368-4.992 5.348m10.64 0v4.992c0 2.98-2.368 5.348-5.348 5.348s-5.348-2.368-5.348-5.348m0-4.992C5.33 6.368 3 4 3 4s2.368-2.348 5.348-2.348m0 10.696v4.992"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Automations</p>
                                <p class="mt-1 text-sm text-gray-500">Build strategic funnels that will convert</p>
                            </div>
                        </a>

                        <a href="#" class="group -m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-700 transition duration-150 ease-in-out group-hover:bg-indigo-50 group-hover:text-indigo-600 sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0 1 19.5 7.5v.18c0 .313.023.62.068.924l-1.391 3.478-1.59-1.592a3.748 3.748 0 0 0-5.303 0l-3.05 3.051a3.748 3.748 0 0 0 0 5.303l1.59 1.59-3.478 1.39a7.502 7.502 0 0 1-4.11-13.257 7.5 7.5 0 0 1 6.94-2.81Z"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Security</p>
                                <p class="mt-1 text-sm text-gray-500">Your customers’ data will be safe and secure</p>
                            </div>
                        </a>

                        <a href="#" class="group -m-3 flex items-start rounded-lg p-3 transition duration-150 ease-in-out hover:bg-gray-50">
                            <div class="flex h-10 w-10 flex-shrink-0 items-center justify-center rounded-lg bg-gray-100 text-gray-700 transition duration-150 ease-in-out group-hover:bg-indigo-50 group-hover:text-indigo-600 sm:h-12 sm:w-12">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 0 15 7.5 7.5 0 0 0 0-15Z M21 21l-5.2-5.2"/></svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-base font-medium text-gray-900">Reports</p>
                                <p class="mt-1 text-sm text-gray-500">Edit, manage and create newly informed decisions</p>
                            </div>
                        </a>

                    </div>
                    <div class="bg-gray-50 p-5">
                        <div class="flex items-center gap-x-3">
                            <h3 class="text-base font-medium text-gray-900">
                                Enterprise
                            </h3>
                            <span class="inline-flex items-center rounded-full bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800">
                            New
                        </span>
                        </div>
                        <p class="mt-2 text-sm text-gray-500">
                            Empower your entire team with even more advanced tools.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
