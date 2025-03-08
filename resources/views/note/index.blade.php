<x-layout>
    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">My Notes</h2>
            <a href=" {{ route('note.create')}} " class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                + Add Note
            </a>
        </div>

        <div class="grid gap-4">
            @foreach ($notes as $note)
            <div class="p-4 bg-gray-100 rounded-lg shadow">
                <p class="text-gray-700">{{ $note->note }}</p>
                <div class="flex justify-end gap-2 mt-3">
                    <a href=" {{ route('note.show',$note)}} " class="px-3 py-1 text-blue-600 hover:underline">View</a>
                    <a href=" {{ route('note.edit', $note)}} " class="px-3 py-1 text-green-600 hover:underline">Edit</a>
                    <button class="px-3 py-1 text-red-600 hover:underline">Delete</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
