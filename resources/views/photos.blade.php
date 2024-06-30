<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suikou - Photos</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="container mx-auto px-4">
        <header class="text-center py-4">
            <h1 class="text-3xl font-bold">Photo Album</h1>
        </header>

        <main class="py-8">
            <h2 class="text-2xl mb-4">My Photos</h2>
            <div class="grid grid-cols-3 gap-4">
                <!-- 写真をここに追加 -->
                <div class="bg-white rounded shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Photo" class="w-full h-auto">
                </div>
                <!-- 他の写真も同様に追加 -->
            </div>
        </main>

        <footer class="text-center py-4">
            <p>&copy; 2024 Suikou</p>
        </footer>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
