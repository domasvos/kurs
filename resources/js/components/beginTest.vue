<template>
    <div class="container">
        <div class="row">
            <div class="col-md-6 rounded work-item zoom">
                <a href="/quiz/klausimas">
                <img class="img-fluid zoom rounded testing" src="/images/a/brain.jpg" alt=""/>
                <h3 class="centered">Bandyti testą</h3>
                </a>
            </div>
            <div class="col-md-6 rounded work-item zoom">
                <a href="/quiz/info">
                    <img class="img-fluid zoom rounded testing" src="/images/a/question.jpg" alt=""/>
                    <h3 class="centered">Kaip atlikti testą</h3>
                </a>

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
