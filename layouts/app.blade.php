<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Jigsaw – Static Sites for Laravel Developers</title>

        <link rel="icon" type="image/png" href="/assets/img/jigsaw-logo.png">

        <meta name="msapplication-TileColor" content="#773580">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" href="https://use.typekit.net/fac7rzg.css">

        <link rel="stylesheet" type="text/css" href="{{ Theme::asset('pub_theme::dist/css/app.css',1) }}">

        <link href='https://fonts.googleapis.com/css?family=Lato:100,300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
    </head>

    <body class="min-h-screen font-sans leading-tight">
        <main id="vue-app">
            <div class="w-full bg-brown-lightest border-t-5 border-purple"></div>

            @yield('body')
        </main>
        @yield('scripts')
        <script src="{{ Theme::asset('pub_theme::dist/js/manifest.js',1) }}"></script>
        <script src="{{ Theme::asset('pub_theme::dist/js/vendor.js',2) }}"></script>
        <script src="{{ Theme::asset('pub_theme::dist/js/app.js',3) }}"></script>
    </body>
</html>
