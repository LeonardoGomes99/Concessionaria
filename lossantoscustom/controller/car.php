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
            "imagem" => $wallpaper_url
        );
        $car->create($data);
        header('Location: ../home');
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
