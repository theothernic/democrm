<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') :: {{ config('app.name') }}</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <header id="TitleBar">

    </header>

    <main id="Content">@yield('content')</main>
    <footer id="StatusBar">

    </footer>
</body>
</html>
