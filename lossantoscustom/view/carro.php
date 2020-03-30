<?php
$id = $_GET["id"];

require_once("model/car.php");

$car = new Car();
$carro = $car->select_where("where id = '$id'")[0];

?>

<style>
    html {
        background: url("src/public/background3.jpg") no-repeat center fixed;
        background-size: cover;
    }

    .devcard {
        margin: 30px;
        margin-top: 20px;
        position: relative;
        display: inline-block;
        width: 800px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.9);
        box-shadow: 0px 0px 10px 2px #fff;
        color: white;
        border-radius: 3px;
    }

    .devcard img {
        border-radius: 3px 3px 0px 0px;
        width: 100%;

        height: 280px;
        object-fit: cover;
        object-position: center;
    }

    .devcard .modelo {
        margin-top: 25px;
        margin-left: 25px;
        margin-right: 25px;

        text-align: left;
        font-size: 30px;
    }

    .devcard .marca {
        margin-top: 25px;
        margin-left: 25px;
        margin-right: 25px;

        text-align: left;
        font-size: 25px;
    }

    .devcard .preco {
        margin-top: 25px;
        margin-left: 25px;
        margin-right: 25px;

        text-align: left;
        font-size: 20px;
    }

    .devcard .detalhes {
        margin-top: 25px;
        margin-left: 25px;
        margin-right: 25px;
        margin-bottom: 25px;
       
        font-size: 20px;
        text-align: justify;
        
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
    <div class="devs">
        <div class="devcard">
            <div class="image">
                <img src="<?= $carro["imagem"] ?>" class="carimg">
            </div>
            <div class="modelo">
                Modelo: <?= $carro["modelo"] ?>
            </div>
            <div class="marca">
                Marca: <?= $carro["marca"] ?>
            </div>
            <div class="preco">
                A partir de: <?= $util->money_blr($carro["preco"]) ?>
            </div>
            <div class="detalhes">
                Detalhes: <?= $carro["detalhes"] ?>
            </div>
        </div>
    </div>
</div>