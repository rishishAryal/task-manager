<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body>
<a href="/" class="text-3xl m-5 text-white block w-fit p-4 bg-blue-500 rounded-2xl">Home</a>
<div class="flex justify-center my-4">

    @auth

    <a href="#" class="text-white p-2 bg-blue-500 rounded font-bold text-2xl mx-2" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log Out</a>

    <form id="logout-form" method="post" action="/logout" class="hidden">
        @csrf
    </form>
        <a class="text-white p-2 bg-blue-500 rounded font-bold text-2xl mx-2" href="/create">Add New Task</a>

@else
    <a href="/login" class="text-white p-2 bg-blue-500 rounded font-bold text-2xl mx-2 ">Login</a>

    <a href="/register" class="text-white p-2 bg-blue-500 rounded font-bold text-2xl mx-2">Register</a>
    @endauth
</div>



{{$slot}}

<x-flash />
</body>
</html>
