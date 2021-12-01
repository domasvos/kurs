<template>
    <div id="app" class="container">
        <input type="checkbox" id="myCheckbox1" />
        <label for="myCheckbox1"><img :src="image" height="223" width="449"/>Answer A</label>
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
