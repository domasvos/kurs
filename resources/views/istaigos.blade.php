<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Istaigos</title>
    </head>
    <body class="antialiased">
    <div class="mx-auto">
        <div class="card">
            <img src="#" alt="VDU" style="width:100%">
            <h1>Vytauto didziojo universitetas</h1>
            <p class="price">studentas@vdu.lt</p>
            <p>S. Daukanto g. 27-206, 44244, Kaunas</p>
            <p>
                <button onclick="window.location.href='https://www.vdu.lt/en/'">Daugiau informacijos</button>
            </p>
        </div>
        <div class="card">
            <img src="#" alt="VU" style="width:100%">
            <h1>Vilniaus Universitetas</h1>
            <p class="price">konsultavimas@vu.lt</p>
            <p>Universiteto g. 3, LT-01513 Vilnius</p>
            <p>
                <button onclick="window.location.href='https://www.vu.lt/en/'">Daugiau informacijos</button>
            </p>
        </div>
        <div class="card">
            <img src="#" alt="KTU" style="width:100%">
            <h1>Kauno Tecnologiju Universitetas</h1>
            <p class="price">ktu@ktu.lt</p>
            <p>K. Donelaičio g. 73, LT-44249 Kaunas</p>
            <p>
                <button onclick="window.location.href='https://ktu.edu/'">Daugiau informacijos</button>
            </p>
        </div>
        <div class="card">
            <img src="#" alt="VGTU" style="width:100%">
            <h1>Vilniaus Gedimino Technikos Universitetas</h1>
            <p class="price">vilniustech@vilniustech.lt</p>
            <p>Saulėtekio al. 11, 10223 Vilnius</p>
            <p>
                <button onclick="window.location.href='https://vilniustech.lt/'">Daugiau informacijos</button>
            </p>
        </div>
    </div>
    </body>
</html>
<style>
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }
    .mx-auto {
        margin-right: auto !important;
        margin-left: auto !important;
        display: flex;
        justify-content: center;
        flex-direction: row;
    }

    .price {
        color: grey;
        font-size: 22px;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }
</style>
