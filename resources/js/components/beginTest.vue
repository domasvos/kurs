<template>
    <div>
    <div class="card-reader">Sukurti apklausa</div>
    <div class="card-body">
        <form action="/quiz/testas" method="post">
            <div class="form-group">
                <label for="title">Pavadinimas</label>
                <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Pavadinimas">
                <small id="titleHelp" class="form-text text-muted">Pavadinkite savo apklausa</small>
            </div>
            <div class="form-group">
                <label for="purpose">Tikslas</label>
                <input type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Tikslas">
                <small id="purposeHelp" class="form-text text-muted">Duokite tiksla savo apklausai</small>
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
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
