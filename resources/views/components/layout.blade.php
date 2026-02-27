<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'OnTrack' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="navbar bg-base-100 shadow-sm">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl" href="/">OnTrack</a>
        </div>
        
        @auth
        <div class="flex-none mr-[2rem]">
        <form method="POST" action="/logout" class="inline">
            @csrf
            <button type="submit" class="btn btn-md">Logout</button>
        </form>
        </div>
        @endauth
    </div>
    <div class="m-auto max-w-[80rem]">
        <div class="mx-[2rem] mb-[2rem]">
            {{ $slot }}
        </div>
        
    </div>
</body>
</html>