@extends('layouts.app')

@section('content')
    <div x-data="{ isDarkMode: window.matchMedia('(prefers-color-scheme: dark)').matches }"
         x-init="window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => isDarkMode = e.matches)"
         :class="{ 'dark': isDarkMode }"
         class="min-h-screen flex items-center bg-white dark:bg-slate-900 transition-colors duration-300 overflow-x-hidden">

        <div class="w-full grid grid-cols-1 lg:grid-cols-[2fr_1fr] items-start gap-x-16">
            <div class="px-6 py-20 lg:pl-12 lg:pr-12">
                <div class="max-w-4xl">
                    <h2 class="text-5xl font-bold tracking-tight text-slate-900 dark:text-white sm:text-6xl">Our mission</h2>
                    <p class="mt-10 text-2xl leading-9 text-slate-600 dark:text-slate-400">
                        Aliquet nec orci mattis amet quisque ullamcorper neque, nibh sem. At arcu, sit dui mi, nibh dui, diam eget aliquam. Quisque id at vitae feugiat egestas ac. Diam nulla orci at in viverra scelerisque eget. Eleifend egestas fringilla sapien.
                    </p>
                    <p class="mt-12 text-2xl leading-9 text-slate-600 dark:text-slate-400">
                        Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.
                    </p>
                </div>
            </div>

            <div class="px-6 py-20 lg:pr-24 lg:pt-36">
                <dl class="space-y-10 max-w-sm">
                    <div>
                        <dt class="text-6xl font-semibold tracking-tight text-slate-900 dark:text-white">44 million</dt>
                        <dd class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-400">Transactions every 24 hours</dd>
                    </div>
                    <div>
                        <dt class="text-6xl font-semibold tracking-tight text-slate-900 dark:text-white">$119 trillion</dt>
                        <dd class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-400">Assets under holding</dd>
                    </div>
                    <div>
                        <dt class="text-6xl font-semibold tracking-tight text-slate-900 dark:text-white">46,000</dt>
                        <dd class="mt-2 text-sm leading-6 text-slate-600 dark:text-slate-400">New users annually</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
