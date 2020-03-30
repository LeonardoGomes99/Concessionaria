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

    .box-shadow-blue {
        box-shadow: 0px 0px 10px 2px #4D4DFF;
    }

    .box-shadow-pink {
        box-shadow: 0px 0px 10px 2px #FC0FC0;
    }

    .carshomes img {
        border-radius: 3px 3px 0px 0px;
        width: 100%;

        height: 160px;
        object-fit: cover;
        object-position: center;
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

<div class="areas">

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="carshome">

        <?php
        require_once("model/car.php");
        $car = new Car();
        $cars = $car->select_where("");
        foreach ($cars as $key => $value) {
        ?>
            <div class="carshomes" onclick="window.location.href ='carro?id= <?= $value['id'] ?>'">
                <div class="image">
                    <img class="imagine" src="<?= $value["imagem"] ?>" class="carimg">
                </div>
                <div class="carshomemodelo">
                    Modelo: <?= $value["modelo"] ?>
                </div>
                <div class="carshomemarca">
                    Marca: <?= $value["marca"] ?>
                </div>
                <div class="carshomepreco">
                    Preço: <?= $util->money_blr($value["preco"]) ?>
                </div>
            </div>
        <?php
        }
        ?>


    </div>
</div>