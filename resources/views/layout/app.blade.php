<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>
        @yield('page-title', '')
    </title>
    @yield('head-cdn')
    @vite('resources/js/app.js')
</head>
<body>
    {{-- include copys the content of the file at resources/views/partials/header.blade.php --}}
    @include('partials.header')
    @yield('jumbo-tron')


    <main>
        {{-- yield permits to modify the content of the file at resources/views/pages/home.blade.php --}}
        @yield('main-content')
    </main>


    @yield('info')
    {{-- include copys the content of the file at resources/views/partials/footer.blade.php --}}
    @include('partials.footer')
</body>
</html>
