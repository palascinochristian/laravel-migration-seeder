<!DOCTYPE html>
<html lang="It">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Tabellone Treni</title>
</head>
<body>
    <header>
        @yield('head')
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>