<x-app-layout title="Routes">

    <div class="mx-auto">
        <h2 class="mt-2 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Index Route</h2>
        <p class="mt-6 text-xl leading-8 text-gray-700">Laravel Folio makes defining index routes for page directories straightforward. This means that by placing an index.blade.php template in a specific directory, any request to the root of that directory will automatically be routed to the index page. For example:</p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio index
# pages/index.blade.php → /</pre>
        <p class="mt-4 text-xl leading-8 text-gray-700">You can also create index routes for specific subdirectories:
        </p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio users/index
# pages/users/index.blade.php → /users</pre>
    </div>

    <div class="mx-auto mt-20">
        <h2 class="mt-2 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Nested Routes</h2>
        <p class="mt-6 text-xl leading-8 text-gray-700">Laravel Folio allows you to create nested routes by organizing your templates into subdirectories. This is useful for structuring your routes hierarchically and maintaining clear organization in your application.</p>
        <p class="mt-6 text-xl leading-8 text-gray-700">For example, to create a page accessible through the route /user/profile, simply create a profile.blade.php template within the pages/user directory:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio user/profile
# pages/user/profile.blade.php → /user/profile</pre>
        <p class="mt-4 text-xl leading-8 text-gray-700">This approach lets you group related pages under a directory hierarchy for better organization and maintenance.</p>
    </div>

    <div class="mx-auto mt-20">
        <h2 class="mt-2 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Routes with Parameters</h2>
        <p class="mt-6 text-xl leading-8 text-gray-700">Laravel Folio makes working with routes containing parameters straightforward. You can inject segments of the incoming request's URL directly into your template using square brackets in the Blade template.</p>
        <p class="mt-6 text-xl leading-8 text-gray-700"> For instance, to capture a parameter id in a URL like /users/1:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio "users/[id]"
# pages/users/[id].blade.php → /users/1</pre>

        <p class="mt-4 text-xl leading-8 text-gray-700">The captured segments can be accessed as variables in your Blade template:</p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">&lt;div&gt;
    User &#123;&#123; $id &#125;&#125;
&lt;/div&gt;</pre>

        <p class="mt-6 text-xl leading-8 text-gray-700">You can also capture multiple segments using three dots ...:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio "users/[...ids]"
# pages/users/[...ids].blade.php → /users/1/2/3</pre>

        <p class="mt-6 text-xl leading-8 text-gray-700">In this case, the captured segments will be injected into the page as an array:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">
&lt;ul&gt;
    &#64;foreach ($ids as $id)
        &lt;li&gt;User &#123;&#123; $id &#125;&#125;&lt;/li&gt;
    &#64;endforeach
&lt;/ul&gt;
</pre>

        <p class="mt-6 text-xl leading-8 text-gray-700">With these features, Laravel Folio provides you with the flexibility to work with nested routes and handle parameters in your templates effectively.</p>


    </div>

    <div class="mx-auto mt-20 mb-50">
        <h2 class="mt-2 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Route Model Binding</h2>
        <p class="mt-6 text-xl leading-8 text-gray-700">Laravel Folio leverages the power of Laravel's model binding system, making it easy to inject model instances directly into your page templates. This is particularly useful when you need to access specific model information on your page.</p>

        <h3 class="mt-6 text-xl font-semibold text-gray-800">Automatic Binding</h3>
        <p class="mt-2 text-gray-700">To benefit from automatic model binding, simply name a segment of the template after the model class name. For example:</p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio "users/[User]"
# pages/users/[User].blade.php → /users/1</pre>

        <p class="mt-2 text-gray-700">Here, the page will be automatically routed to /users/1, and the corresponding User model instance for ID 1 will be injected into the template as a variable.</p>

        <h3 class="mt-6 text-xl font-semibold text-gray-800">Accessing Model Properties</h3>
        <p class="mt-2 text-gray-700">Inside your template, you can access the model's properties in the usual manner:</p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">&lt;div&gt;
    User &#123;&#123; $user->id &#125;&#125;
&lt;/div&gt;</pre>

        <h3 class="mt-6 text-xl font-semibold text-gray-800">Customizing the Class Name</h3>
        <p class="mt-2 text-gray-700">If you need to specify the exact location of the model, you can do so in the template:</p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">php artisan make:folio "users/[.App\Models\User]"
# pages/users/[.App.Models.User].blade.php → /users/1</pre>

        <h3 class="mt-6 text-xl font-semibold text-gray-800">Soft Deleted Models</h3>
        <p class="mt-2 text-gray-700">By default, models deleted with soft delete are not automatically retrieved for model binding. However, you can instruct Folio to retrieve them using the withTrashed method in the template:</p>
        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">&lt;?php

use function Laravel\Folio\{withTrashed};

withTrashed();

?&gt;

&lt;div&gt;
    User &#123;&#123; $user->id &#125;&#125;
&lt;/div&gt;</pre>

        <p class="mt-2 text-gray-700">This allows you to access soft deleted models in your templates.</p>

        <p class="mt-6 text-gray-700">Route model binding in Laravel Folio makes working with model data much smoother and convenient.</p>

    </div>


    <div class="mx-auto mt-20">
        <h2 class="mt-2 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Middleware on Specific Pages</h2>

        <p class="mt-2 text-gray-700">Laravel Folio allows you to apply middleware to specific pages, adding layers of security and additional functionality. You can do this by invoking the middleware function in the page's template:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">
&lt;?php
    use function Laravel\Folio\{middleware};

    middleware(['auth', 'verified']);

?&gt;

&lt;div&gt;
    Dashboard
&lt;/div&gt;
    </pre>

        <h2 class="mt-6 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">Middleware on Page Group</h2>

        <p class="mt-2 text-gray-700">You can also assign middleware to groups of pages using the middleware method after invoking the Folio::path method. You can specify the pages to which the middleware should be applied using URL patterns:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">
use Laravel\Folio\Folio;

Folio::path(resource_path('views/pages'))->middleware([
    'admin/*' => [
        'auth',
        'verified',

        // Other middleware...
    ],
]);
    </pre>

        <h2 class="mt-6 text-2xl font-bold tracking-tight text-blue-900 sm:text-4xl">PHP Blocks</h2>

        <p class="mt-2 text-gray-700">When using Folio, the <strong>&lt;?php and ?&gt;</strong> tags are reserved for page definition functions like middleware and withTrashed. If you need to write PHP code that should be executed within your Blade template, use the <strong>&#64;php</strong> Blade directive:</p>

        <pre class="bg-slate-800 text-white rounded-lg p-2 mt-2">
&lt;?php
    if (! Auth::user()-&gt;can('view-posts', $user)) {
        abort(403);
    }

    $posts = $user-&gt;posts;
 ?&gt;

             &#64;foreach ($posts as $post)
                &lt;div&gt;
                &#123;&#123; $post-&gt;title &#125;&#125;
                &lt;/div&gt;
            &#64;endforeach
    </pre>

    </div>



</x-app-layout>
