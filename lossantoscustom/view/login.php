<style>
    html {
        background: url("src/public/background2.jpg") no-repeat center fixed;
        background-size: cover;
    }
</style>

<form action="user/logar" method="post">
    <div class="container">

        <label class="femail" for="email">Email</label>
        <input type="text" id="email" name="email">
        <label class="fsenha" for="senha">Senha</label>
        <input type="password" id="senha" name="senha">
        <input type="submit" value="Entrar" name="Entrar">

    </div>
</form>