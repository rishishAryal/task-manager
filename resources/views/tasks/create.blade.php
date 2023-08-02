<x-layout>


    <div class="container mx-auto p-4">
    <form method="post" class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Task Title:</label>
            <input type="text" id="title" name="title" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            @error('title')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Task Description:</label>
            <textarea id="description" name="description" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" rows="4" required></textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-4">
            <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Submit</button>
        </div>
    </form>
    </div>
</x-layout>
