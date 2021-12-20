<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Statistika</title>
    </head>
    <body>
    <div id="app">
        @guest
            <header-page></header-page>
        @else
            <header-logged :user={{ auth()->user() }}></header-logged>
        @endguest
    </div>
    <div class="wrapper container">
        <!-- Chart's container -->
        <div id="chart" style="height: 500px;"></div>
        <div id="chart2" style="height: 500px;"></div>
        <!-- Charting library -->
        <script src="https://unpkg.com/chart.js@2.9.3/dist/Chart.min.js"></script>
        <!-- Chartisan -->
        <script src="https://unpkg.com/@chartisan/chartjs@^2.1.0/dist/chartisan_chartjs.umd.js"></script>
        <!-- Your application script -->
        <script>
            const chart = new Chartisan({
                el: '#chart',
                data: {
                    "chart": {
                        "labels": [
                            "Veterinarija",
                            "Neurochirurgija",
                            "Taikomoji matematika",
                            "Programu sistemos",
                            "Multimedijos ir interneto technologijos"
                        ]

                    },
                    "datasets": [
                        {
                            "name": "Minimalus stojamasis balas",
                            "values": [
                                8.4,
                                9.2,
                                7,
                                6,
                                5.2
                            ]
                        },
                        {
                            "name": "Rekomenduojamas balas",
                            "values": [
                                9,
                                9.8,
                                8,
                                7.2,
                                6
                            ]
                        }
                    ]
                },
                hooks: new ChartisanHooks()
                    .colors(['#ec4949', '#993333'])
                    .beginAtZero()
                    .title(
                        {
                            text: 'Konkursinio balo reikalavimai studijų kryptims',
                            fontSize: '15',
                            fontWeight: 'bold',
                            fontFamily: '"Nunito", sans-serif',
                        }
                    )
            })
        </script>
        <script>
            const chart2 = new Chartisan({
                el: '#chart',
                data: {
                    "chart": {
                        "labels": [
                            "Veterinarija",
                            "Neurochirurgija",
                            "Taikomoji matematika",
                            "Programu sistemos",
                            "Multimedijos ir interneto technologijos"
                        ]

                    },
                    "datasets": [
                        {
                            "name": "Didelis stojamasis balas",
                            "values": [
                                8.4,
                                9.2,
                                7,
                                6,
                                5.2
                            ]
                        },
                        {
                            "name": "Rekomenduojamas",
                            "values": [
                                9,
                                9.8,
                                8,
                                7.2,
                                6
                            ]
                        }
                    ]
                },
                hooks: new ChartisanHooks()
                    .colors(['#ec4949', '#993333'])
                    .beginAtZero()
                    .title(
                        {
                            text: 'Konkursinio balo reikalavimai studijų kryptims',
                            fontSize: '15',
                            fontWeight: 'bold',
                            fontFamily: '"Nunito", sans-serif',
                        }
                    )
            })
        </script>
    </div>

    </body>
</html>
<style scoped>
    .wrapper {
        padding-top: 50px;
    }
</style>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
