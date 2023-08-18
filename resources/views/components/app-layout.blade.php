<!doctype html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>--}}

</head>
<body class="h-full">

<livewire:navigation></livewire:navigation>

<header class="bg-blue-900 shadow">
    <div class="mx-auto max-w-7xl px-4 py-2 sm:px-6 lg:px-8 border-solid border-t border-[#084aab]">
        <h1 class="text-3xl font-semibold tracking-tight text-white">{{$title}}</h1>
    </div>
</header>

<main>
    <div class="mx-auto bg-gray-100 max-w-7xl py-6 sm:px-6 lg:px-8">
        {{$slot}}
    </div>
</main>


</body>
</html>
