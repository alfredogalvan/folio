<?php
//
//use function Laravel\Folio\{middleware};
//
//middleware(['check.user.existence']);
//
//
?>
<x-app-layout title="User Route {{$post->name}}">

    {{$middlewareMessage ?? ''}}

    <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
        <img class="w-24 h-24 md:w-48 h-auto rounded-l-xl mx-auto" src="https://placehold.co/384x512?text=Hello\nWorld" alt="" width="384" height="512">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <blockquote>
                <p class="text-lg font-medium text-white">
                    {{$post->content}}
                </p>
            </blockquote>
            <figcaption class="font-medium">
                <div class="text-sky-500 dark:text-sky-400">
                    {{$post->title}}
                </div>
                <div class="text-slate-700 dark:text-slate-500">
                    {{$post->slug}}
                </div>
            </figcaption>
        </div>
    </figure>

</x-app-layout>
