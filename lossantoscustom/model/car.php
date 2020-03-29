<?php
class Car
{
    //id, marca, modelo, preco, detalhes, imagem
    /*
    $car = array(
        "id" => $id,
        "marca" => $marca,
        "modelo" => $modelo,
        "preco" => $preco,
        "detalhes" => $detalhes,
        "imagem" => $imagem
    );
    */

    function create($car)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO cars (marca, modelo, preco, detalhes, imagem)
            VALUES (:marca, :modelo, :preco, :detalhes, :imagem)");

        $connection->prepare($sql)->execute($car);
    }

    function delete($id)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $stmt = $connection->prepare('DELETE FROM cars WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    function select_where($where)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from cars $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {

            $data = array(
                "id" => $row['id'],
                "marca" => $row['marca'],
                "modelo" => $row['modelo'],
                "preco" => $row['preco'],
                "detalhes" => $row['detalhes'],
                "imagem" => $row['imagem']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
}
