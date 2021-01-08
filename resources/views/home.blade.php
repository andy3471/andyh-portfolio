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

    </head>
 <body>
    <div id="app">
        <home containerName="@php echo gethostname() @endphp" />
    </div>
</body>
</html>
