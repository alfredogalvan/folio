<div class="bg-white shadow-md p-6">
    <h2 class="text-lg font-semibold mb-4">User List</h2>
    <table class="min-w-full rounded-lg">
        <thead class="">
        <tr class="bg-gray-100 ">
            <th class="px-4 py-2">Id</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr class="hover:bg-gray-50">

                    <td class="px-4 py-2 text-gray-800">{{$user->id}}</td>
                    <td class="px-4 py-2 text-gray-800">{{$user->name}}</td>
                    <td class="px-4 py-2 text-gray-600">{{$user->email}}</td>
                    <td class="px-4 py-2">
                        <a href="/user/{{$user->id}}" wire:navigate class="text-blue-600 hover:underline">View</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
