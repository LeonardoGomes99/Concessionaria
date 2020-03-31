<style>
    html {
        background: url("src/public/background.jpg") no-repeat center fixed;
        background-size: cover;
    }
</style>

<div class="formbox-areas">
    <br><br><br><br><br>
    <div class="formbox">
        <form action="user/cadastrar" method="post">
            <div class="title">
                Formulário de Cadastro
            </div>
            <div class="car">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">

                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha">

                <label for="confsenha">Confirme Senha</label>
                <input type="password" id="confsenha" name="confsenha">

                <input type="submit" value="Cadastrar" name="Entrar">
            </div>
        </form>
        <br>
        <br>
    </div>
</div>