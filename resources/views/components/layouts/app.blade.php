@props(['title' => 'Routing'])

<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <h1>Server Routing</h1>
        <div>
            <a href="/">Home</a>
            <a href="/1">1</a>
            <a href="/2">2</a>
        </div>
        <hr/>
        {{ $slot }}
    </body>
</html>
