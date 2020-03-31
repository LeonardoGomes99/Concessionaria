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

        $user_data = $user->select_where(("where email = '" . $data['email'] . "'"));

        if ($user_data && $user_data[0]["email"] == $data["email"] && $user_data[0]["senha"] == $data["senha"]) {
            session_start();
            $_SESSION['lossantoscustom_email'] = $data["email"];
            $_SESSION['lossantoscustom_senha'] = $data["senha"];
        ?>
            <script>
                //alert("Logado com sucesso");
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
        header('Location: ../home');
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
