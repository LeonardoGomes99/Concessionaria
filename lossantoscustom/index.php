<?php
require_once("model/util.php");
$util = new Util();
$sessao = $util->sessao();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lossantos Custom</title>
    <link rel="stylesheet" href="src/css/style.css">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="src/public/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="src/public/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="src/public/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="src/public/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="src/public/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="src/public/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="src/public/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="src/public/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="src/public/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="src/public/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="src/public/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="src/public/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="src/public/favicon/favicon-16x16.png">
    <link rel="manifest" href="src/public/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="src/public/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- /favicon -->
</head>

<body>
    <?php

    $pages = array(
        "404" => "404",
        "home" => "home",
        "login" => "login",
        "cadastro" => "cadastro",
        "cadastrocarro" => "cadastrocarro",
        "carro" => "carro",
        "sobre" => "sobre"
    );


    if (isset($_GET["url"])) {
        $page = explode('/', $_GET["url"])[0];

        $method = false;
        if (isset(explode('/', $_GET["url"])[1])) {
            $method = true;
        }

        if ($method) {
            $method = explode('/', $_GET["url"])[1];

            if (file_exists("controller/" . $page . ".php")) {
                require_once("controller/" . $page . ".php");

                $classe = ucfirst($page) . "Control";
                $func = new $classe();
                $func->$method();
            } else {
                header('Location: ../home');
            }
        } else {
            if (isset($pages[$page]) || $method) {
                require_once("view/menu.php");
                require_once("view/" . $page . ".php");
            } else {
                require_once("view/" . 404 . ".php");
            }
        }
    } else {
        header('Location: home');
    }
    ?>
</body>

</html>