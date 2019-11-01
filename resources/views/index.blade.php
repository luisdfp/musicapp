<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/app.css">

        <title>MusicApp</title>
    </head>
    <body>
        <header class="navbar navbar-dark bg-dark shadow">
            <div class="container">
                <a href="#/" class="navbar-brand d-flex">
                    <strong>MusicApp</strong>
                </a>
            </div>
        </header>
        <div id="app"></div>
    </body>
    <script src="/js/app.js"></script>
</html>
