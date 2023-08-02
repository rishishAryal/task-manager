<x-layout>

    <div class="container mx-auto p-4">
        @auth
        <h1 class="text-pink-500 text-2xl font-bold">Tasks Related to {{auth()->user()->name}} </h1>
        @endauth
        <table class="w-full border-collapse table-auto border-2">
            <thead>
            <tr class="bg-gray-800 text-white">
                <th class="p-2">Task ID</th>
                <th class="p-2">Task Title</th>
                <th class="p-2">Description</th>
                <th class="p-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            <!-- Sample data (replace this with your actual data) -->

          @auth
              @foreach($tasks as $task)
                <tr class="bg-gray-100">
                <td class="p-2">{{$task->id}}</td>
                <td class="p-2">{{$task->title}}</td>
                <td class="p-2">{{$task->description}}</td>

                <td class="p-2">
                    <form method="post" action="/tasks/{{$task->id}}/delete">
                        @method('delete')
                        @csrf
                        <button  class="bg-green-500 text-white rounded px-4 py-2">Finish</button>
                    </form>
</td>

            </tr>

              @endforeach
          @endauth
            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>


</x-layout>
