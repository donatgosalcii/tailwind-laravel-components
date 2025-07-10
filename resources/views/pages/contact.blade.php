@extends('layouts.app')

@section('content')
    <div x-data="{ isDarkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }"
         x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => isDarkMode = e.matches)"
         :class="{ 'dark': isDarkMode }"
         class="h-full isolate">

        <div class="grid grid-cols-1 lg:grid-cols-12">
            <div class="relative bg-gray-50 dark:bg-gray-950 overflow-hidden px-6 pb-20 pt-24 sm:pt-32 lg:col-span-6 lg:px-16 lg:py-48">

                <div class="pointer-events-none absolute inset-0 grid-background z-0"></div>

                <div class="relative z-10 mx-auto max-w-lg lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white sm:text-5xl" style="font-family: sans-serif;">Get in touch</h2>
                    <p class="mt-8 text-xl leading-8 text-gray-600 dark:text-gray-300">Proin volutpat consequat porttitor cras nullam gravida at. Orci molestie a eu arcu. Sed ut tincidunt integer elementum id sem. Arcu sed malesuada et magna.</p>
                    <dl class="mt-10 space-y-4 text-lg leading-7 text-gray-500 dark:text-gray-400">
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Address</span>
                                <svg class="h-7 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M8.25 21V10.5M8.25 6H11m-2.75 3H11m-2.75 3H11m3.75 6V10.5m0-4.5H16m-2.25 3H16m-2.25 3H16M18.75 21V7.5m-13.5 9V7.5" />
                                </svg>
                            </dt>
                            <dd class="text-gray-700 dark:text-gray-300">545 Mavis Island<br>Chicago, IL 99191</dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Telephone</span>
                                <svg class="h-7 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                            </dt>
                            <dd><a class="text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white"
                                   href="tel:+1 (555) 234-5678">+1 (555) 234-5678</a></dd>
                        </div>
                        <div class="flex gap-x-4">
                            <dt class="flex-none">
                                <span class="sr-only">Email</span>
                                <svg class="h-7 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </dt>
                            <dd><a class="text-gray-700 hover:text-gray-900 dark:text-gray-300 dark:hover:text-white"
                                   href="mailto:hello@example.com">hello@example.com</a></dd>
                        </div>
                    </dl>
                </div>
            </div>

            <form action="#" method="POST"
                  class="px-6 pb-24 pt-20 sm:pb-32 lg:col-span-6 lg:px-16 lg:py-48">
                <div class="mx-auto max-w-2xl lg:ml-24">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2">
                        <div>
                            <label for="first-name" class="block text-base font-semibold leading-6 text-gray-900 dark:text-white">First name</label>
                            <div class="mt-2.5">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                       class="block w-full rounded-md border-0 bg-transparent dark:bg-white/5 px-3.5 py-3 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-white/10 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-violet-600 dark:focus:ring-violet-500 sm:text-base sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="last-name" class="block text-base font-semibold leading-6 text-gray-900 dark:text-white">Last name</label>
                            <div class="mt-2.5">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                       class="block w-full rounded-md border-0 bg-transparent dark:bg-white/5 px-3.5 py-3 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-white/10 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-violet-600 dark:focus:ring-violet-500 sm:text-base sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="email" class="block text-base font-semibold leading-6 text-gray-900 dark:text-white">Email</label>
                            <div class="mt-2.5">
                                <input type="email" name="email" id="email" autocomplete="email"
                                       class="block w-full rounded-md border-0 bg-transparent dark:bg-white/5 px-3.5 py-3 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-white/10 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-violet-600 dark:focus:ring-violet-500 sm:text-base sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="phone-number" class="block text-base font-semibold leading-6 text-gray-900 dark:text-white">Phone number</label>
                            <div class="mt-2.5">
                                <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                       class="block w-full rounded-md border-0 bg-transparent dark:bg-white/5 px-3.5 py-3 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-white/10 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-violet-600 dark:focus:ring-violet-500 sm:text-base sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="message" class="block text-base font-semibold leading-6 text-gray-900 dark:text-white">Message</label>
                            <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4"
                                      class="block w-full rounded-md border-0 bg-transparent dark:bg-white/5 px-3.5 py-3 text-gray-900 dark:text-white shadow-sm ring-1 ring-inset ring-gray-300 dark:ring-white/10 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:ring-2 focus:ring-inset focus:ring-violet-600 dark:focus:ring-violet-500 sm:text-base sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 flex justify-end">
                        <button type="submit"
                                class="rounded-md bg-violet-600 px-8 py-3 text-base font-semibold text-white shadow-sm hover:bg-violet-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-600">
                            Send message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
