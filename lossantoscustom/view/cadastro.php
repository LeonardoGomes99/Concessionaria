<style>
    html {
        background: url("src/public/background.jpg") no-repeat center fixed;
        background-size: cover;
    }
</style>

<form action="user/cadastrar" method="post">

    <div class="container former">

        <label class="femail" for="email">Email</label>
        <input type="text" id="email" name="email">

        <label class="fsenha" for="senha">Senha</label>
        <input type="password" id="senha" name="senha">

        <label class="fconfsenha" for="confsenha">Confirme Senha</label>
        <input class="ffconfsenha" type="password" id="confsenha" name="confsenha">

        <input class="Eentrar" type="submit" value="Cadastrar" name="Entrar">

    </div>
</form>