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
    </div>
    <div id="klausimas_1" class="center">
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox1" />
            <label for="myCheckbox1"><img src="../../../images/2.png" /> Answer A</label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox2" />
            <label for="myCheckbox2"><img src="../../../images/2.png" /> Answer B</label>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox3" />
            <label for="myCheckbox3"><img src="../../../images/2.png" /> Answer C</label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox4" />
            <label for="myCheckbox4"><img src="../../../images/2.png" /> Answer D</label>
        </div>
        <button onclick="nextQuestion()" type="button" class="btn btn-primary">Kitas klausimas</button>
    </div>
    <div id="klausimas_2" class="center new">
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox5" />
            <label for="myCheckbox5"><img src="../../../images/2.png" /> Atsakymas A</label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox6" />
            <label for="myCheckbox6"><img src="../../../images/2.png" /> Atsakymas B</label>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox7" />
            <label for="myCheckbox7"><img src="../../../images/2.png" /> Atsakymas C</label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox8" />
            <label for="myCheckbox8"><img src="../../../images/2.png" /> Atsakymas D</label>
        </div>
        <button onclick="ats()" type="button" class="btn btn-primary">Pabaigti testa</button>

    </div>
    <div id="atsakymo_pvz" class="container col-12 center new">
        <button onclick="window.location.href='/quiz/testas'" type="button" class="btn btn-primary">Bandyti dar karta</button>
        <button onclick="window.location.href='/istaigos'" type="button" class="btn btn-primary">Kur Stoti</button>
        <button onclick="window.location.href='/home'" type="button" class="btn btn-primary">Paskyra</button>
    </div>

    </body>
</html>
<script src="{{ mix('/js/app.js') }}"></script>
<style>
.center {
    text-align: center;
}
.new {
    display: none;
}
</style>
<style>
    .card-header {
        background-color: #993333 !important;
        color: white !important;

    }
    .btn-primary {
        background-color: #993333 !important;
        border-color: #993333 !important;
    }
    .btn-primary:hover{
        background-color: #ec4949 !important;
        border-color: #ec4949 !important;
    }
</style>
<script>
    function nextQuestion(){
        document.getElementById("klausimas_1").style.display="none";
        document.getElementById("klausimas_2").style.display="block";
    }
    function ats(){
        document.getElementById("klausimas_2").style.display="none";
        document.getElementById("atsakymo_pvz").style.display="block";
    }
</script>

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
