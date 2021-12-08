<template>
    <div>
        <div>
            <div class="header-dark">
                <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                    <div class="container"><a class="navbar-brand" href="/">Pasirink studijas!</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                             id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="/quiz/testas">Studijų testas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="/kaip_istoti">Kaip įstoti?</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="/istaigos">Įstaigos</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="/klausk">Forumas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="/statistika">Statistika</a></li>
                            </ul>
                            <form class="form-inline mr-auto" target="_self">
                            </form><span class="navbar-text"><a href="login" class="login">Prisijungti</a></span><a class="btn btn-light action-button" role="button" href="/register">Registruotis</a></div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
</template>

<style scoped>
.container{
    margin-top: 0px;
}
</style>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
