<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Studijų pasirinkimo sistema</title>
    <script>
        var renderPage = true;

        if(navigator.userAgent.indexOf('MSIE')!==-1
            || navigator.appVersion.indexOf('Trident/') > 0){
            /* Microsoft Internet Explorer detected in. */
            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>

</head>

<body>
<div id="app">
    @guest
        <header-page></header-page>
    @else
    <header-logged :user={{ auth()->user() }}></header-logged>
        @endguest
</div>
<div class="container extra">

    <!-- pirmas -->
    <section class="row tm-section">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
            <div class="tm-flex-center p-5 tm-bg-color-primary tm-section-min-h">
                <h1 class="tm-text-color-white tm-site-name">Pasirink savo studijas!</h1>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="tm-flex-center p-5">
                <q class="tm-quote tm-text-color-gray">Ut sit amet augue elit. Vivamus eget tortor in ante scelerisque gravida. Vestibulum auctor condimentum sem.</q>
            </div>
        </div>
    </section>

    <!-- studiju testas -->
    <section class="row tm-section tm-col-md-reverse">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="tm-flex-center p-5">
                <div class="tm-md-flex-center">
                    <h2 class="tm-text-color-primary mb-4">Studijų testas</h2>
                    <p class="mb-4">Nežinai ką studijuoti? Išbandyk testą, kuris rekomenduos tavo norams palankias studijas!</p>
                    <a href="/quiz/testas" class="btn btn-primary float-lg-right tm-md-align-center">Bandyti testą</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
            <div class="text-center">
                <img src="images/testas.jpg" alt="Image" class="img-fluid thumbnail">
            </div>
        </div>
    </section>

    <!-- kaip istoti -->
    <section class="row tm-section tm-col-md-reverse">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
            <img src="images/stud.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="tm-flex-center p-5">
                <div class="tm-flex-center tm-flex-col">
                    <h2 class="tm-align-left">Kaip įstoti?</h2>
                    <p class="mb-4">Sužinok visą aktualiausią informaciją, kaip galima įstoti į norimas studijas bei pateikti dokumentus į norimą mokymo įstaigą!</p>
                    <a href="kaip_istoti" class="btn btn-primary">Kaip įstoti</a>
                </div>
            </div>
        </div>
    </section>

    <!-- istaigos -->
    <section class="row tm-section tm-col-md-reverse">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="tm-flex-center p-5">
                <div class="tm-md-flex-center">
                    <h2 class="tm-text-color-primary mb-4">Įstaigos</h2>
                    <p class="mb-4">Nežinai į kurią mokymo įstaigą stoti? Peržiūrėk visas populiariausias įstaigas bei jų privalumus!</p>
                    <a href="/istaigos" class="btn btn-primary float-lg-right tm-md-align-center">Mokymo įstaigos</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
            <div class="tm-flex-center p-5 tm-bg-color-primary">
                <div class="tm-max-w-400 tm-flex-center tm-flex-col">
                    <img src="images/3.jpeg" alt="Image" class="rounded-circle mb-4">
                    <p class="tm-text-color-white small tm-font-thin mb-0">Nullam eleifend, ipsum eu aliquet fermentum , odio urna dignissim ante, semper maximus libero nisl non nibh.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- forumas -->
    <section class="row tm-section tm-col-md-reverse">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0 text-center">
            <img src="images/forum.jpg" alt="Image" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="tm-flex-center p-5">
                <div class="tm-flex-center tm-flex-col">
                    <h2 class="tm-align-left">Forumas</h2>
                    <p class="mb-4">Trūksta informacijos? Klausk kitų mokslinčių informacijos!</p>
                    <a href="/klausk" class="btn btn-primary">Klausti</a>
                </div>
            </div>
        </div>
    </section>

    <!-- statistika -->
    <section class="row tm-section tm-col-md-reverse">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <div class="tm-flex-center p-5">
                <div class="tm-md-flex-center">
                    <h2 class="tm-text-color-primary mb-4">Statistika</h2>
                    <p class="mb-4">Įdomu kokios specialybes yra paklausios bei kokia konkurencija yra aplinkui? Pažiūrėk visą atkualią statistiką!</p>
                    <a href="/statistika" class="btn btn-primary float-lg-right tm-md-align-center">Statistika</a>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 p-0">
            <div class="tm-flex-center p-5 tm-bg-color-primary">
                <div class="tm-max-w-400 tm-flex-center tm-flex-col">
                    <img src="images/chart.png" alt="Image" class="rounded-circle mb-4">
                    <p class="tm-text-color-white small tm-font-thin mb-0">Nullam eleifend, ipsum eu aliquet fermentum , odio urna dignissim ante, semper maximus libero nisl non nibh.</p>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" defer></script>
    <script>

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            if(renderPage) {
                $('body').addClass('loaded');
            }

        });

    </script>
</body>
</html>
<style>
    body {
        font-size: 18px;
        color: #666666;
        background-color: #f4f4f4;
    }

    p, q { line-height: 1.8; }
    h2 { font-size: 1.8rem; }

    .tm-site-name {
        font-size: 4rem;
    }

    .tm-quote {
        font-size: 1.35rem;
        font-style: italic;
    }

    .extra {
        margin-top: 1px;
    }

    .tm-container-inner {
        margin: 0 auto;
        max-width: 880px;
    }

    .tm-section {
        background-color: white;
    }

    .tm-section,
    .tm-section-min-h {
        min-height: 400px;
    }

    .tm-flex-center {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tm-flex-col {
        flex-direction: column;
    }

    .tm-mb-30 { margin-bottom: 30px; }

    .tm-align-left { align-self: left; }

    .btn {
        border-radius: 0;
        text-transform: uppercase;
        padding: 12px 47px;
        font-size: 1.15rem;
        background-color: #993333;
    }

    .btn-primary {
        background: #993333 !important;
        border-color: #993333 !important;
    }

    .btn_new {
        background: #993333;
        border-color: #993333;
    }

    .btn_new:hover,
    .btn_new:focus {
        background: #993333;
        border-color: #993333;
    }

    .btn-primary:focus,
    .btn-primary:hover {
        background: #ec4949 !important;
        border-color: #ec4949 !important;
    }

    .tm-bg-color-primary { background-color: #993333; }
    .tm-bg-color-secondary { background-color: white; }
    .tm-bg-color-gray { background-color: #666666; }
    .tm-text-color-primary { color: #993333; }
    .tm-text-color-white { color: white; }
    .tm-text-color-gray { color: #ec4949; }
    .tm-font-thin { font-weight: 300; }
    .tm-max-w-400 { max-width: 400px; }

    .form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #666666;
        opacity: 1; /* Firefox */
    }

    .form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
        color: #666666;
    }

    .form-control::-ms-input-placeholder { /* Microsoft Edge */
        color: #666666;
    }

    .tm-contact-form select,
    .tm-contact-form input {
        color: #666;
    }
    .tm-contact-form textarea {
        height: 205px;
    }

    select:focus {
        outline-color: #993334;
    }

    .tm-contact-form select {
        width: 100%;
        padding: 15px;
    }

    .tm-contact-form input[type="radio"] {
        margin-right: 10px;
    }

    .tm-center {
        width: 100%;
        text-align: center;
    }

    .tm-copyright-text {
        padding: 20px;
        font-size: 1rem;
    }

    /* Loader */

    #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2000;
    }
    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #3498db;

        -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

        z-index: 1001;
    }

    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #e74c3c;

        -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;

        -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    @-webkit-keyframes spin {
        0%   {
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }
    @keyframes spin {
        0%   {
            -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);  /* IE 9 */
            transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
        }
        100% {
            -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);  /* IE 9 */
            transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
        }
    }

    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 51%;
        height: 100%;
        background: #222222;
        z-index: 1000;
        -webkit-transform: translateX(0);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(0);  /* IE 9 */
        transform: translateX(0);  /* Firefox 16+, IE 10+, Opera */
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }

    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    /* Loaded */
    .loaded #loader-wrapper .loader-section.section-left {
        -webkit-transform: translateX(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(-100%);  /* IE 9 */
        transform: translateX(-100%);  /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .loaded #loader-wrapper .loader-section.section-right {
        -webkit-transform: translateX(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(100%);  /* IE 9 */
        transform: translateX(100%);  /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .loaded #loader {
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }
    .loaded #loader-wrapper {
        visibility: hidden;

        -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateY(-100%);  /* IE 9 */
        transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.3s 1s ease-out;
        transition: all 0.3s 1s ease-out;
    }

    /* JavaScript Turned Off */
    .no-js #loader-wrapper {
        display: none;
    }

    .tm-col-md-reverse {
        flex-direction: column-reverse;
    }

    .tm-col-md-reverse > * {
        flex: 1;
    }

    @media(min-width: 992px) {
        .tm-col-md-reverse {
            flex-direction: row;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1200px;
        }
    }

    @media (max-width: 992px) {
        .tm-md-flex-center {
            display: flex;
            flex-direction: column;
        }

        .tm-md-align-center {
            align-self: center;
        }

        .tm-pl-l {
            padding: 0 3rem;
        }
    }

    @media (max-width: 600px) {
        .tm-contact-form {
            padding: 30px 25px;
        }
    }


</style>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style scoped>

</style>
