<template>
    <div>
        <div>
            <div class="header-dark">
                <nav class="navbar navbar-dark navbar-expand-md navigation-clean-search">
                    <div class="container"><a class="navbar-brand" href="#">Pasirink studijas!</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                             id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Studijų testas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Kaip įstoti?</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Įstaigos</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Forumas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Statistika</a></li>
                            </ul>
                            <form class="form-inline mr-auto" target="_self">
                            </form><span class="navbar-text"><a href="login" class="login">Prisijungiau</a></span><a class="btn btn-light action-button" role="button" href="/register">Registruotis</a></div>
                    </div>
                </nav>
            </div>
        </div>

    </div>
</template>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style scoped>
.container{
    margin-top: 0px;
}
</style>
