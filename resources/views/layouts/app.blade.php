<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Suikou')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <style>

    </style>
</head>

<body class="bg-gray-100 font-serif leading-normal tracking-normal">

    <body class="bg-gray-100 font-sans leading-normal tracking-normal">

        <header class="fixed top-0 left-0 w-full shadow-md z-20 bg-gray-100">
            <div class="flex h-20 items-center justify-between border-b-2 px-4">
                <h1 class="px-3 text-2xl">Suikou</h1>
                <nav>
                    <button id="menuBtn" type="button"
                        class="flex h-14 w-14 items-center justify-center rounded-md border-gray-700 bg-gray-300 text-white sm:hidden">
                        <i id="menuIconBars" class="fa-solid fa-bars fa-2x"></i>
                        <i id="menuIconX" class="fa-solid fa-xmark fa-2x hidden"></i>
                    </button>
                    <ul id="menu"
                        class="fixed top-20 left-0 z-30 flex w-full translate-x-full flex-col text-center text-white transition-all ease-linear sm:static sm:w-full sm:translate-x-0 sm:flex-row sm:place-items-center sm:bg-gray-100 sm:text-black">
                        <li class="p-3"><a href="">TOP</a></li>
                        <li class="p-3"><a href="">ABOUT</a></li>
                        <li class="p-3"><a href="https://www.hal40n.com" target="">BLOG</a></li>
                        <li class="p-3"><a href="">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="container mx-auto px-4 pt-20">
            <main class="px-4 py-8">
                @yield('content')
            </main>

            <footer class="text-center py-4">
                <p>&copy; 2024 Shoma Takeuchi</p>
            </footer>
        </div>
        @vite('resources/js/app.js')
    </body>

</html>