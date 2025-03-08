<x-layout>
    <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Create Note</h1>

        <form action="{{ route('note.store')}}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="note" placeholder="Enter your note" 
                class="w-full p-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required>

            <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">
                Save Note
            </button>
        </form>
    </div>
</x-layout>
