<x-layout>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Edit Note</h1>

        <form action="{{ route('note.update', $note->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <input type="text" name="note" value="{{ $note->note }}" 
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>

            <div class="flex justify-between">
                <a href="/note" class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow-md hover:bg-gray-600 transition">
                    Cancel
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                    Update Note
                </button>
            </div>
        </form>
    </div>
</x-layout>
