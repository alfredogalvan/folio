<x-app-layout title="Installation">

    <div class="mx-auto">
        <h2 class="mt-2 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Installation</h2>
        <p class="mt-6 text-xl leading-8 text-gray-700">Getting started with Laravel Folio in your project is quick and easy. Follow these steps to install it:</p>
        <ol class="mt-4 list-decimal text-xl leading-8 text-gray-700">
            <li>Open your terminal and navigate to the root directory of your Laravel project.</li>
            <li>Use the Composer package manager to install Laravel Folio. Execute the following command:
                <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">composer require laravel/folio:"^1.0@beta"</pre>
            </li>
            <li>Once the package is installed, run the Artisan command folio:install to install the Folio service provider and configure route search directories. Use the following command:
                <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan folio:install</pre>
            </li>
        </ol>
        <p class="mt-4 text-xl leading-8 text-gray-700">With these steps completed, you'll have integrated Laravel Folio into your project and will be ready to start defining and using page-based routes.</p>
    </div>

</x-app-layout>
