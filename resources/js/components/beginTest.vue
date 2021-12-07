<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Testo parinktys</div>
                    <div class="card-body">
                        <a href="/quiz/klausimas" class="btn btn-primary">Pradeti testa</a>
                        <a href="/info" class="btn btn-primary">Kaip atlikti testa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
@import "../../css/app.css";
.card-header{
    background-color: #993333 !important;
    color: white !important;
}
.btn-primary {
    background-color: #ec4949 !important;
    border-color: #ec4949 !important;
}
.btn-primary:hover{
    background-color: #993333 !important;
    border-color: #993333 !important;
}
</style>
