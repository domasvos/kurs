<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Testas</title>

        <!-- Fonts -->
        <style>
            .myCheckbox_hide{
                display: none;
            }
            label::before {
                background-image: url(../../../images/2.png);
            }
            label img {
                transition-duration: 0.2s;
                transform-origin: 50% 50%;
            }
            label {
                border: 1px solid #fff;
                padding: 10px;
                display: block;
                position: relative;
                margin: 10px;
                cursor: pointer;
                -webkit-touch-callout: none;
                -webkit-user-select: none;
                -khtml-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            label::before {
                background-color: #993333;
                color: #993333;
                content: " ";
                display: block;
                border-radius: 50%;
                border: 1px #993333;
                position: absolute;
                top: -5px;
                left: -5px;
                width: 25px;
                height: 25px;
                text-align: center;
                line-height: 28px;
                transition-duration: 0.4s;
                transform: scale(0);
            }
            :checked+label img {
                transform: scale(0.9);
                box-shadow: 0 0 15px #993333;
                z-index: -1;
            }
            :checked+label {
                border-color: #993333;
            }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div id="app">
        @guest
            <header-page></header-page>
        @else
            <header-logged :user={{ auth()->user() }}></header-logged>
        @endguest
        <klausimas-enter></klausimas-enter>
    </div>
    </body>
</html>
<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('/js/custom.js') }}"></script>
<style>
.center {
    text-align: center;
}
.new {
    display: none;
}
</style>
<style>
    .row {
        padding-top: 50px;
    }
</style>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
