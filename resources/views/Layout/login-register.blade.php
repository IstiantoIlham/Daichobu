<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
</head>

<body>
    
    <main class="relative">
        <img class="object-cover w-screen h-screen brightness-50" src="{{ asset('images/login-bg.png') }}" alt="">
        @yield('content')
    </main>
</body>

</html>
