<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Suikou')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto px-4">
        <header class="text-center py-4">
            <h1 class="text-3xl font-bold">Suikou</h1>
        </header>

        <main class="py-8">
            @yield('content')
        </main>

        <footer class="text-center py-4">
            <p>&copy; 2024 Suikou</p>
        </footer>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
