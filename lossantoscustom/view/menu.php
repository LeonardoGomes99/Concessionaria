<?php if ($sessao) { ?>
    <?php if ($sessao["id"] == 1) { ?>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="cadastrocarro">Cadastrar Carro</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="user/deslogar">Sair</a></li>
        </ul>
    <?php } else { ?>
        <ul>
            <li><a href="home">Home</a></li>
            <li><a href="sobre">Sobre</a></li>
            <li><a href="user/deslogar">Sair</a></li>
        </ul>
    <?php } ?>
<?php } else { ?>
    <ul>
        <li><a href="home">Home</a></li>
        <li><a href="login">Login</a></li>
        <li><a href="cadastro">Cadastro</a></li>
        <li><a href="sobre">Sobre</a></li>
    </ul>
<?php } ?>