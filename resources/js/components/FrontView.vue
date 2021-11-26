<template>
    <div class="container">
        <div class="int_test grid-item aligning-right txt-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
        <div class="int_desc grid-item "><a href="/quiz/testas"><img src="images/test.png"></a></div>
        <div class="kaip_desc grid-item aligning-right"><a href="/kaip_istoti"><img src="images/test.png"></a></div>
        <div class="kaip_is grid-item txt-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
        <div class="istaigos grid-item aligning-right txt-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
        <div class="istaigos_desc grid-item"><a href="/istaigos"><img src="images/test.png"></a></div>
        <div class="klaus grid-item txt-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
        <div class="klaus_desc grid-item aligning-right"><a href="/klausk"><img src="images/test.png"></a></div>
        <div class="stat_desc grid-item"><a href="/statistika"><img src="images/test.png"></a></div>
        <div class="stat grid-item aligning-right txt-align">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</div>
        <div class="gap1"></div>
        <div class="gap2"></div>
        <div class="gap3"></div>
        <div class="gap4"></div>
        <div class="gap5"></div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
.container {
    display: grid;
    grid-template-columns: 1fr 0.01fr 1fr;
    grid-template-rows: 300px 300px 300px 300px 300px;
    gap: 15px 15px;
    grid-auto-flow: row;
    grid-template-areas:
    "int_test gap1 int_desc"
    "kaip_desc gap2 kaip_is"
    "istaigos gap3 istaigos_desc"
    "klaus_desc gap4 klaus"
    "stat gap5 stat_desc";
}

.int_test { grid-area: int_test; }
.int_desc { grid-area: int_desc; }
.kaip_desc { grid-area: kaip_desc; }
.kaip_is { grid-area: kaip_is; }
.istaigos { grid-area: istaigos; }
.istaigos_desc { grid-area: istaigos_desc; }
.klaus { grid-area: klaus; }
.klaus_desc { grid-area: klaus_desc; }
.stat_desc { grid-area: stat_desc; }
.stat { grid-area: stat; }
.gap1 { grid-area: gap1; }
.gap2 { grid-area: gap2; }
.gap3 { grid-area: gap3; }
.gap4 { grid-area: gap4; }
.gap5 { grid-area: gap5; }
.grid-item{
    border-color: blue;
    background: red;

}
.aligning-right{
    text-align: right;
}
.txt-align{
    display: flex;
    justify-content: center;
    align-items: center;
}
</style>
