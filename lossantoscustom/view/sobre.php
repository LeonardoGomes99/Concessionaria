<style>
    html {
        background: url("src/public/background.jpg") no-repeat center fixed;
        background-size: cover;
    }

    .devcard {
        margin: 30px;
        margin-top: 20px;
        position: relative;
        display: inline-block;
        width: 250px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.9);
        box-shadow: 0px 0px 10px 2px #fff;
        color: white;
        border-radius: 3px;
    }

    .box-shadow-blue{
        box-shadow: 0px 0px 10px 2px #4D4DFF;
    }
    .box-shadow-pink{
        box-shadow: 0px 0px 10px 2px #FC0FC0;
    }

    .devcard img {
        border-radius: 3px 3px 0px 0px;
        width: 100%;
    }

    .devcard .nome {
        margin-top: 15px;
        font-size: 30px;
    }

    .devcard .funcao {
        margin-top: 10px;
        margin-bottom: 15px;
        font-size: 25px;
    }

    .devs {
        display: block;
    }

    .areas {
        width: 100%;
        display: block;
        text-align: center;
    }
</style>

<div class="areas">
    <br>
    <br>
    <br>
    <br>
    <div class="devs">
        <div class="devcard box-shadow-blue">
            <div class="image">
                <img src="src/public/team/leonardo.jpg" class="carimg">
            </div>
            <div class="nome">
                Leonardo Gomes
            </div>
            <div class="funcao">
                FullStack
            </div>
        </div>
        <div class="devcard box-shadow-blue">
            <div class="image">
                <img src="src/public/team/jhonatan.jpg" class="carimg">
            </div>
            <div class="nome">
                Jhonatan Luiz
            </div>
            <div class="funcao">
                FullStack
            </div>
        </div>
    </div>
    <div class="devs">
        <div class="devcard box-shadow-pink">
            <div class="image">
                <img src="src/public/team/luisa.jpg" class="carimg">
            </div>
            <div class="nome">
                Luisa Couto
            </div>
            <div class="funcao">
                Web designer
            </div>
        </div>
        <div class="devcard box-shadow-pink">
            <div class="image">
                <img src="src/public/team/mateus.jpg" class="carimg">
            </div>
            <div class="nome">
                Mateus Leonardo
            </div>
            <div class="funcao">
                Web designer
            </div>
        </div>
        <div class="devcard box-shadow-pink">
            <div class="image">
                <img src="src/public/team/vitoria.jpg" class="carimg">
            </div>
            <div class="nome">
                Vitoria
            </div>
            <div class="funcao">
                Web designer
            </div>
        </div>
    </div>
</div>