<?php
class User
{
    //id id_car id_user data
    /*
    $car = array(
        "id" => $id,
        "id_car" => $id_car,
        "id_user" => $id_user,
        "data" => $data
    );
    */

    function create($sale)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO sells (id_car, id_user, data)
            VALUES (:id_car, :id_user, :data)");

        $connection->prepare($sql)->execute($sale);
    }

    function delete($id)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $stmt = $connection->prepare('DELETE FROM sells WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    function select_where($where)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from sells $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {

            $data = array(
                "id" => $row['id'],
                "id_car" => $row['id_car'],
                "id_user" => $row['id_user'],
                "data" => $row['data']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
}
