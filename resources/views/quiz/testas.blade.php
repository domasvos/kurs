<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Studiju pasirinkimo sistemo</title>

    </head>
    <body class="antialiased">
    <div id="app">
        @guest
            <header-page></header-page>
        @else
            <header-logged :user={{ auth()->user() }}></header-logged>
        @endguest
            <begin-test></begin-test>
    </div>
    </body>
</html>
<style scored>
    .row{
        padding-top:50px;
    }
</style>
<script src="{{ mix('/js/app.js') }}"></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
