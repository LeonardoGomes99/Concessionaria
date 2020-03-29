<?php
class User
{
    //id email senha
    /*
    $user = array(
        "id" => $id,
        "email" => $email,
        "senha" => $senha
    );
    */

    function create($user)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = ("INSERT INTO users (email, senha)
            VALUES (:email, :senha)");

        $connection->prepare($sql)->execute($user);
    }

    function delete($id)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $stmt = $connection->prepare('DELETE FROM users WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }


    function select_where($where)
    {
        require_once("database.php");
        $database = new Database();
        $connection = $database->connection();

        $sql = "select * from users $where";

        $all_data = array();
        foreach ($connection->query($sql) as $row) {

            $data = array(
                "id" => $row['id'],
                "email" => $row['email'],
                "senha" => $row['senha']
            );

            array_push($all_data, $data);
        }
        return $all_data;
    }
}
