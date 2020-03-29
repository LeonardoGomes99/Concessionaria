<?php
class CarControl
{
    function cadastrar()
    {

        $wallpaper = $_FILES['imagem'];
        $title = $_POST['modelo'];

        //tratando o wallpaper
        $wallpaper_type = explode('/', $wallpaper['type'])[1];
        $wallpaper_url = "src/public/carros/" . clear_string($title) . "." . $wallpaper_type;
        move_uploaded_file($wallpaper['tmp_name'], $wallpaper_url);
        $wallpaper_url = "src/public/carros/" . clear_string($title) . "." . $wallpaper_type;

        require_once("model/car.php");
        $car = new Car();
        $data = array(
            "marca" => $_POST["marca"],
            "modelo" => $_POST["modelo"],
            "preco" => $_POST["preco"],
            "detalhes" => $_POST["detalhes"],
            "imagem" => $wallpaper_url,
        );
        $car->create($data);
?>
        <script>
            //window.location.href = "../home";
        </script>
        <?php


    }

    function logar()
    {
        require_once("model/user.php");
        $user = new User();
        $data = array("email" => $_POST["email"], "senha" => $_POST["senha"]);

        $user_data = $user->select_where(("where email = '" . $data['email'] . "'"));

        if ($user_data && $user_data[0]["email"] == $data["email"] && $user_data[0]["senha"] == $data["senha"]) {
            session_start();
            $_SESSION['lossantoscustom_email'] = $data["email"];
            $_SESSION['lossantoscustom_senha'] = $data["senha"];
        ?>
            <script>
                alert("Logado com sucesso");
                window.location.href = "../home";
            </script>
        <?php

        } else { ?>
            <script>
                alert("Não logado\nVerifique seu email e senha");
                window.location.href = "../login";
            </script>
<?php
        }
    }

    function deslogar()
    {
        session_start();
        session_destroy();
    }

    function status()
    {
        session_start();

        if (isset($_SESSION['lossantoscustom_email']) && isset($_SESSION['lossantoscustom_senha'])) {
            require_once("model/user.php");
            $user = new User();

            $email = $_SESSION['lossantoscustom_email'];
            $senha = $_SESSION['lossantoscustom_senha'];

            $user_data = $user->select_where("where email = '$email' and senha = '$senha'");

            if ($user_data) {
                return $user_data;
            }
        }
        session_destroy();
        return false;
    }
}

function clear_string($string)
{
    if ($string !== mb_convert_encoding(mb_convert_encoding($string, 'UTF-32', 'UTF-8'), 'UTF-8', 'UTF-32'))
        $string = mb_convert_encoding($string, 'UTF-8', mb_detect_encoding($string));
    $string = htmlentities($string, ENT_NOQUOTES, 'UTF-8');
    $string = preg_replace('`&([a-z]{1,2})(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig);`i', '\1', $string);
    $string = html_entity_decode($string, ENT_NOQUOTES, 'UTF-8');
    $string = preg_replace(array('`[^a-z0-9]`i', '`[-]+`'), ' ', $string);
    $string = preg_replace('/( ){2,}/', '$1', $string);
    $string = strtolower(trim($string));
    return $string;
}
