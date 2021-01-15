<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Andrew Hargrave">
        <meta name="description" content="I'm a self taught Web Developer that works with PHP, JS, HTML, SQL, Redis, CSS and SCSS. I have a very good knowledge of the Laravel MVC framework. I also have knowledge of Bootstrap and Bulma as UI frameworks">
        <title>AndyH Web Development Portfolio</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="images/ico/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="images/ico/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="images/ico/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="images/ico/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="images/ico/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="images/ico/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="images/ico/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/ico/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/ico/favicon-16x16.png">
    </head>
 <body>
    <div id="app">
        <home containerName="@php echo gethostname() @endphp" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </div>
</body>
</html>
