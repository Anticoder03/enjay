<x-layout>
    <div class="max-w-lg mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Note Details</h1>

        <div class="p-4 bg-gray-100 rounded-lg shadow">
            <h1>{{ $note->created_at }}</h1>
            <p class="text-gray-700">{{ $note->note }}</p>
        </div>

        <div class="flex justify-between items-center mt-4">
            <a href="/note" class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow-md hover:bg-gray-600 transition">
                Back
            </a>
            <div class="flex gap-2">
                <a href="{{ route('note.edit', $note->id) }}" class="px-4 py-2 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 transition">
                    Edit
                </a>
                
            </div>
        </div>
    </div>
</x-layout>
