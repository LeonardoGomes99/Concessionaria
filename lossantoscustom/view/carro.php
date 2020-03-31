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
</style>



<div class="areas">
    <br><br><br>
    <div class="card-car">
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