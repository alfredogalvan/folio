<x-app-layout title="User Route">
    <ul class="list-disc pl-6 mt-4">
        @foreach($ids as $id)
            <li class="text-gray-700">ID {{$id}}</li>
        @endforeach
    </ul>

</x-app-layout>
