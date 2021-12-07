<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Statistika</title>
    </head>
    <body>
        <!-- Chart's container -->
        <div id="chart" style="height: 300px;"></div>
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
                            "Pirmas",
                            "Antras",
                            "Trecias"
                        ]
                    },
                        "datasets": [
                        {
                            "name": "Pirmas Pavyzdys",
                            "values": [
                                10,
                                3,
                                7
                            ]
                        },
                        {
                            "name": "Antras Pavyzdys",
                            "values": [
                                1,
                                6,
                                2
                            ]
                        }
                    ]
                },
                hooks: new ChartisanHooks()
                .colors(['#ec4949', '#993333'])
                .beginAtZero(),
            })
        </script>
    </body>
</html>
