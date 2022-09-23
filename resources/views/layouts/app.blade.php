<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LN_Gourmandises</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/59ecaaffaa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script crossorigin="anonymous" defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class="min-h-screen mx-auto bg-white shadow-xl max-w-7xl shadow-orange-900 ">
    <header>
        @include('components.parts.header')
    </header>

    <main>
        @yield('main')
    </main>

    <footer class="bg-[#38ADA9] h-24">
        @include('components.parts.footer')
    </footer>
</body>

</html>
