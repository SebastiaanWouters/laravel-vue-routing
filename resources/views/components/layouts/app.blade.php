@props(['title' => 'Routing'])

<html>
    <head>
        <title>{{ $title }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
        >
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body style="padding: 1rem;">
        <h1>Server Routing</h1>
        <div style="display: flex; gap: 0.75rem;">
            <a href="/">Home</a>
            <a href="/1">1</a>
            <a href="/2">2</a>
        </div>
        <hr/>
        {{ $slot }}
    </body>
</html>
