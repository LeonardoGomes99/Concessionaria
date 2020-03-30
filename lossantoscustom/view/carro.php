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

<h1>carro</h1>


<div class="carshow">
    <div class="carshowinside"><img src="<?= $carro["imagem"] ?>" class="carimg" alt="image"></div>
    <label class="showcarmodelo" for="cadcarmodelo">Modelo: <?= $carro["modelo"] ?></label>
    <label class="showcarmarca" for="cadcarmarca">Marca Carro: <?= $carro["marca"] ?></label>
    <label class="showcarpreco" for="cadcarpreco">Preço: <?= $carro["preco"] ?></label>
    <label class="showcardetalhes" for="cadcardetalhes">Detalhes: <?= $carro["detalhes"] ?></label>
</div>
