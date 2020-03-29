<?php
class UserControl
{
    function cadastrar()
    {
        require_once("model/user.php");
        $user = new User();
        $data = array("email" => $_POST["email"], "senha" => $_POST["senha"]);
        if ($user->select_where(("where email = '" . $data['email'] . "'"))) {
?>
            <script>
                alert("Ops!\nEmail já cadastrado");
                window.location.href = "../cadastro";
            </script>
        <?php
        } else {
            $user->create($data);
        ?>
            <script>
                alert("Cadastrado com sucesso!\nFaça o login para continuar");
                window.location.href = "../login";
            </script>
        <?php
        }
    }

    function logar()
    {
        require_once("model/user.php");
        $user = new User();
        $data = array("email" => $_POST["email"], "senha" => $_POST["senha"]);

        $user_data = $user->select_where(("where email = '" . $data['email'] . "'"))[0];

        if ($user_data && $user_data["email"] == $data["email"] && $user_data["senha"] == $data["senha"]) {
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
}
