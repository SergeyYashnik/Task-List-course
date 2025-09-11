<!doctype html>
<html class="min-h-dvh flex items-center bg-gray-100">

<head>
    <title>Laravel 12 Task List App</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css')
    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg bg-white p-5 rounded-lg shadow-2xl">
    <h1 class="mb-4 text-2xl">@yield('title')</h1>
    <div x-data="{flash: true}">
        @if(session()->has('success'))
            <div x-show="flash" class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700"
                 role="alert">
                <strong class="font-bold">Success!</strong>
                <div>{{ session('success') }}</div>

                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                       stroke-width="1.5" @click="flash = false"
                       stroke="currentColor" class="h-6 w-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                  </svg>
                </span>
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
