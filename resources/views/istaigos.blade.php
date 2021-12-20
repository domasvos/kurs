<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta charset="utf-8">
    <title>Mokymo įstaigos</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="#">
</head>

<body>
<div id="app">
    @guest
        <header-page></header-page>
    @else
        <header-logged :user={{ auth()->user() }}></header-logged>
    @endguest
</div>
<div class="wrapper">

    <!-- works -->
    <div class="works" id="work">
        <div class="container">
            <!-- default heading -->
            <div class="default-heading">
                <!-- heading -->
                <h2>Mokymo įstaigos</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://www.vdu.lt/en/"><img class="img-fluid zoom size-i-need" src="images/work/3.jpeg" alt="" /></a>
                        <!-- heading -->
                        <h3><a href="https://www.vdu.lt/en/">VDU</a></h3>
                        <!-- brand org -->
                        <span class="org">Vytauto Didžiojo Universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://ktu.edu/"><img class="img-fluid zoom size-i-need" src="images/work/ktu.png" alt="" /></a>
                        <!-- heading -->
                        <h3><a href="https://ktu.edu/">KTU</a></h3>
                        <!-- brand org -->
                        <span class="org">Kauno Technologijų Universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://www.vu.lt/en/"><img class="img-fluid zoom size-i-need" src="images/work/vu.png" alt="" /></a>
                        <!-- heading -->
                        <h3><a href="https://www.vu.lt/en/">VU</a></h3>
                        <!-- brand org -->
                        <span class="org">Vilniaus Universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://vilniustech.lt/"><img class="img-fluid zoom size-i-need" src="images/work/4.jpeg" alt="" /></a>
                        <!-- heading -->
                        <h3><a href="https://vilniustech.lt/">VGTU</a></h3>
                        <!-- brand org -->
                        <span class="org">Vilniaus Gedimino Technikos Universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://www.ism.lt/en/homepage/"><img class="img-fluid zoom size-i-need" src="images/work/7.jpeg" alt="" /></a>
                        <!-- heading -->
                        <h3><a href="https://www.ism.lt/en/homepage/">ISM</a></h3>
                        <!-- brand org -->
                        <span class="org">Vadybos ir Ekonomikos Universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://www.ku.lt/"><img class="img-fluid zoom size-i-need" src="images/work/5.jpeg" alt="" /></a>
                        <!-- heading -->
                        <h3><a href="https://www.ku.lt/">KU</a></h3>
                        <!-- brand org -->
                        <span class="org">Klaipėdos universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="http://www.lsmuni.lt/"><img class="img-fluid zoom size-i-need" src="images/work/6.jpeg" alt=""/></a>
                        <!-- heading -->
                        <h3><a href="http://www.lsmuni.lt/">LSMU</a></h3>
                        <!-- brand org -->
                        <span class="org">Lietuvos sveikatos mokslų universitetas</span>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- work item -->
                    <div class="work-item">
                        <!-- work details image -->
                        <a href="https://lt.ehu.lt/"><img class="img-fluid zoom size-i-need" src="images/work/8.jpeg" alt=""/></a>
                        <!-- heading -->
                        <h3><a href="https://lt.ehu.lt/">EHU</a></h3>
                        <!-- brand org -->
                        <span class="org">Europos humanitarinis universitetas</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style scoped>

</style>

<!-- Javascript files -->
<!-- jQuery -->
<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
<!-- Respond JS for IE8 -->
<script type="text/javascript" src="{{ asset('js/respond.min.js') }}"></script>
<!-- HTML5 Support for IE -->
<script type="text/javascript" src="{{ asset('js/html5shiv.js') }}"></script>
<!-- Custom JS -->
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

