<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tenants') }}
            <x-btn-link class="ml-4 float-end" href="{{ route('tenants.create') }}">Create Tenant</x-btn-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full text-left border-collapse border border-gray-200 dark:border-gray-700">
                        <thead>
                            <tr>
                                {{-- <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">ID</th> --}}
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Name</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Email</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Domain Name</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Created At</th>
                                <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tenants as $tenant)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    {{-- <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $tenant->id }}</td> --}}
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $tenant->name }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $tenant->email }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $tenant->domain_name }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $tenant->created_at }}</td>
                                    <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
                                        <!-- Add your action buttons here -->
                                        <a href="{{ route('tenants.edit', $tenant) }}" class="text-blue-500 hover:text-blue-700">Edit</a> |
                                        <form action="{{ route('tenants.destroy', $tenant) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
