<style>
    html {
        background: url("src/public/background.jpg") no-repeat center fixed;
        background-size: cover;
    }
</style>


<div class="areas">
    <div class="logo-home">
        <img src="src/public/logo.png" alt="">
    </div>

    <br><br><br><br><br>
    <?php
    require_once("model/car.php");
    $car = new Car();
    $cars = $car->select_where("");
    foreach ($cars as $key => $value) {
    ?>
        <div class="card-home" onclick="window.location.href ='carro?id= <?= $value['id'] ?>'">
            <div class="image">
                <img class="imagine" src="<?= $value["imagem"] ?>" class="carimg">
            </div>
            <div class="modelo">
                Modelo: <?= $value["modelo"] ?>
            </div>
            <div class="marca">
                Marca: <?= $value["marca"] ?>
            </div>
            <div class="preco">
                Preço: <?= $util->money_blr($value["preco"]) ?>
            </div>
        </div>
    <?php
    }
    ?>

</div>