<template>
<div class="row">
    <div id="klausimas_1" class="center">
        <div class="container col-md-12">
            <h2>1. Pasirinkite nuotrauką kuri jums patinka labiau:</h2>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox1" />
            <label for="myCheckbox1"><img class="size-i-need_checkbox" src="/images/test/engineer.jpg" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox2" />
            <label for="myCheckbox2"><img class="size-i-need_checkbox" src="/images/test/construction.jpg" /></label>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox3" />
            <label for="myCheckbox3"><img class="size-i-need_checkbox" src="/images/test/office_a.jpg" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox4" />
            <label for="myCheckbox4"><img class="size-i-need_checkbox" src="/images/test/office_b.jpg" /></label>
        </div>
        <button onclick="nextQuestion()" type="button" class="btn btn-primary">Kitas klausimas</button>
        <div class="pad-but"></div>
    </div>
    <div id="klausimas_2" class="center new">
        <div class="container col-md-12">
            <h2>2. Pasirinkite nuotrauką kuri jums patinka labiau:</h2>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox5" />
            <label for="myCheckbox5"><img class="size-i-need_checkbox" src="/images/test/casual.jpg" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox6" />
            <label for="myCheckbox6"><img class="size-i-need_checkbox" src="/images/test/formal.jpg" /></label>
        </div>
        <button onclick="nextQuestion2()" type="button" class="btn btn-primary">Kitas klausimas</button>
        <div class="pad-but"></div>
    </div>
    <div id="klausimas_3" class="center new">
        <div class="container col-md-12">
            <h2>3. Pasirinkite nuotrauką kuri jums patinka labiau:</h2>
        </div>
        <div class="container col-12">
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox7" />
            <label for="myCheckbox7"><img class="size-i-need_checkbox" src="/images/test/remote.jpg" /></label>
            <input type="checkbox" class="myCheckbox_hide" id="myCheckbox8" />
            <label for="myCheckbox8"><img class="size-i-need_checkbox" src="/images/test/teamwork.jpg" /></label>
        </div>
        <button onclick="ats()" type="button" class="btn btn-primary">Pabaigti testa</button>
        <div class="pad-but"></div>
    </div>

    <div id="atsakymo_pvz" class="container center new">
        <div class="col-12">
            <h2>Rezultatai</h2>
            <h3>Jūsų stipriosios pusės</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et leo at arcu finibus commodo. Vestibulum a lacinia leo. Quisque eleifend efficitur blandit. In eget finibus justo. Cras commodo maximus nisl, id ultricies lectus faucibus at. Curabitur in velit quam. Pellentesque semper semper dui, sit amet ultrices ligula condimentum eget. Curabitur cursus libero a eros ornare vehicula. Donec sed diam malesuada, malesuada mauris ac, tincidunt urna. Ut cursus eros vel erat ullamcorper varius.</p>
            <h3>Jūsų silpnosios pusės</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et leo at arcu finibus commodo. Vestibulum a lacinia leo. Quisque eleifend efficitur blandit. In eget finibus justo. Cras commodo maximus nisl, id ultricies lectus faucibus at. Curabitur in velit quam. Pellentesque semper semper dui, sit amet ultrices ligula condimentum eget. Curabitur cursus libero a eros ornare vehicula. Donec sed diam malesuada, malesuada mauris ac, tincidunt urna. Ut cursus eros vel erat ullamcorper varius.</p>
            <h3>Studijų kryptys kurios jums tiktų:</h3>
            <h4>Rezultatas 1</h4>
            <h4>Rezultatas 2</h4>
            <h4>Rezultatas 3</h4>
            <h4>Rezultatas 4</h4>
        </div>

        <a href="/istaigos">
            <div class="button center">
                <div class="button__text">Mokymo įstaigos...</div>

                <div class="button__wrapper">
                    <div class="button__arrow"></div>
                    <div class="button__border-circle"></div>
                    <div class="button__mask-circle">
                        <div class="button__small-circle"></div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
</template>
<style scoped>
.row {
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}
.size-i-need_checkbox{
    height: 300px !important;
    width: 500px !important;
}
h2 {
    margin-bottom: 15px;
}
.col-md-4 {
    padding-bottom: 50px;
}
.pad-but {
    padding-bottom: 50px;
}
</style>
