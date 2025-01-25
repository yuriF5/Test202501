<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mogitate</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>

<body>
    <header class="header__l">
        <a class="header__text" href="{{ '/products' }}">mogitate</a>
        @yield('header')
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>