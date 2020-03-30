<style>
    html {
        background: url("src/public/background.jpg") no-repeat center fixed;
        background-size: cover;
    }

    .carshomes {
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

    .carshomes img {
        border-radius: 3px 3px 0px 0px;
        width: 100%;
    }

    .carshomes .carshomemodelo {
        margin-top: 15px;
        font-size: 20px;
    }

    .carshomes .carshomemarca {
        margin-top: 10px;
        margin-bottom: 15px;
        font-size: 15px;
    }

    .carshomes .carshomepreco {
        margin-top: 10px;
        margin-bottom: 15px;
        font-size: 15px;
    }

    .carshome {
        display: block;
    }

    .areas {
        width: 100%;
        display: block;
        text-align: center;
    }
</style>


<div class="homepageImg"><img src="src/public/h1.jpg" class="homeimg1" alt="image"></div>
<div class="homepageImg"><img src="src/public/h2.jpg" class="homeimg2" alt="image"></div>
<div class="homepageImg"><img src="src/public/h3.jpg" class="homeimg3" alt="image"></div>
<div class="homepageImg"><img src="src/public/h4.jpg" class="homeimg4" alt="image"></div>

<div class="boxcar">
    <div class="boxcarimg"><img src="src/public/mcqueen.jpg" class="carimg" alt="image"></div>
    <p class="modelo">Modelo: Relampâgo Crackinho</p>
    <p class="marca">Marca: Crack</p>
    <p class="preco">Preço: R$3000,00</p>
</div>

<div class="carshome">
        <div class="carshomes box-shadow-blue">
            <div class="image">
                <img src="src/public/mcqueen.jpg" class="carimg">
            </div>
            <div class="carshomemodelo">
                 Modelo: Relampâgo Crackinho
            </div>
            <div class="carshomemarca">
                 Marca: Crack
            </div>
            <div class="carshomepreco">
                 Preço: R$3000,00
            </div>
        </div>
        <div class="carshomes box-shadow-blue">
            <div class="image">
                <img src="src/public/mcqueen.jpg" class="carimg">
            </div>
            <div class="carshomemodelo">
                 Modelo: Relampâgo Crackinho
            </div>
            <div class="carshomemarca">
                 Marca: Crack
            </div>
            <div class="carshomepreco">
                 Preço: R$3000,00
            </div>
        </div>
    </div>
</div>