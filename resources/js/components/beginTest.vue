<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <a href="/quiz/klausimas" class="btn btn-dark">Pradeti testa</a>
                        <a href="/info" class="btn btn-dark">Kaip atlikti testa</a>
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
</style>
