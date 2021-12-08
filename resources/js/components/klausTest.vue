<template>

<div class="row">
    <div id="klausimas_1" class="center">
        <div class="container col-md-12">
            <h2>Pasirinkite nuotrauką kuri jums patinka labiau:</h2>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox1" />
            <label for="myCheckbox1"><img src="/images/2.png" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox2" />
            <label for="myCheckbox2"><img src="/images/2.png" /></label>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox3" />
            <label for="myCheckbox3"><img src="/images/2.png" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox4" />
            <label for="myCheckbox4"><img src="/images/2.png" /></label>
        </div>
        <button onclick="nextQuestion()" type="button" class="btn btn-primary">Kitas klausimas</button>
    </div>
    <div id="klausimas_2" class="center new">
        <div class="container col-md-12">
            <h2>Pasirinkite nuotrauką kuri jums patinka labiau:</h2>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox5" />
            <label for="myCheckbox5"><img src="/images/2.png" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox6" />
            <label for="myCheckbox6"><img src="/images/2.png" /></label>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox7" />
            <label for="myCheckbox7"><img src="/images/2.png" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox8" />
            <label for="myCheckbox8"><img src="/images/2.png" /></label>
        </div>
        <button onclick="ats()" type="button" class="btn btn-primary">Pabaigti testa</button>
    </div>

    <div id="atsakymo_pvz" class="container center new">
            <div class="row">
                <div class="col-md-4 rounded zoom">
                    <a href="/quiz/testas">
                        <img class="img-fluid zoom rounded" src="/images/a/brain.jpg" alt=""/>
                        <h3 class="centered img-text">Bandyti dar karta</h3>
                    </a>
                </div>
                <div class="col-md-4 rounded zoom">
                    <a href="/istaigos">
                        <img class="img-fluid zoom rounded" src="/images/a/brain.jpg" alt=""/>
                        <h3 class="centered img-text">Mokymo įstaigos</h3>
                    </a>
                </div>
                <div class="col-md-4 rounded zoom">
                    <a href="/home">
                        <img class="img-fluid zoom rounded" src="/images/a/brain.jpg" alt=""/>
                        <h3 class="centered img-text">Paskyra</h3>
                    </a>
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                yoyo
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
<script>
function nextQuestion(){
    document.getElementById("klausimas_1").style.display="none";
    document.getElementById("klausimas_2").style.display="block";
}
function ats(){
    document.getElementById("klausimas_2").style.display="none";
    document.getElementById("atsakymo_pvz").style.display="block";
}
</script>

<style scoped>
@import "../../css/app.css";
.row {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}
</style>
