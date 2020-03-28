<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
    
    
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="login">Login</a></li>
            <li><a href="cadastro">Cadastro</a></li>
        </ul>
    

</head>

<body>
    <?php

    $pages = array(
        "404" => "404",
        "home" => "home",
        "login" => "login",
        "cadastro" => "cadastro"
    );


    if (isset($_GET["url"])) {
        $page = explode('/', $_GET["url"])[0];

        $method = false;
        if (isset(explode('/', $_GET["url"])[1])) {
            $method = true;
        }


        if (isset($pages[$page])) {
            if ($method) {
                $method = explode('/', $_GET["url"])[1];
            } else {
                require_once("view/" . $page . ".php");
            }
        } else {
            require_once("view/" . 404 . ".php");
        }
    } else {
        require_once("view/" . 404 . ".php");
    }
    ?>
</body>

</html>