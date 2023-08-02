<x-layout>

    <div class="container mx-auto p-4">
        <form method="post" action="/login" class="w-full max-w-sm bg-white rounded-lg shadow-md p-6">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
                @error('password')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2">Login</button>
            </div>
        </form>
    </div>


</x-layout>
