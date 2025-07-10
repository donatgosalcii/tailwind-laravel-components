@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen items-center justify-center bg-gray-50 p-4 dark:bg-slate-900">

        <div class="w-full max-w-7xl rounded-xl border border-gray-200 bg-white p-6 dark:border-slate-700 dark:bg-slate-800 md:p-8 py-[5rem] md:py-[8rem]">
            <div class="flex flex-col items-start gap-8 md:gap-10 lg:flex-row lg:items-center lg:justify-between">

                <div class="text-left">
                    <h2 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white md:text-5xl">
                        Ready to dive in?
                    </h2>
                    <h2 class="text-4xl font-semibold tracking-tight text-slate-900 dark:text-white md:text-5xl">
                        Start your free trial today.
                    </h2>
                </div>

                <div class="flex shrink-0 items-center gap-x-8">
                    <a
                        href="#"
                        class="rounded-lg bg-indigo-600 px-6 py-3 text-base font-semibold text-white shadow-sm transition hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                    >
                        Get started
                    </a>
                    <a href="#" class="text-base font-semibold text-slate-800 dark:text-slate-300">
                        Learn more <span aria-hidden="true">→</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
