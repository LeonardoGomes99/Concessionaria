<style>
    html {
        background: url("src/public/background3.jpg") no-repeat center fixed;
        background-size: cover;
    }

   
</style>


<div class="formbox-areas">
    <br><br><br><br><br>
    <div class="formbox">
        <form enctype="multipart/form-data" action="car/cadastrar" method="post">
            <div class="title">
                Cadastro de Carro
            </div>
            <div class="car">
                <label for="cadcarmarca">Marca Carro</label>
                <input name="marca" type="text">

                <label for="cadcarmodelo">Modelo</label>
                <input name="modelo" type="text">

                <label for="cadcarpreco">Preço</label>
                <input name="preco" type="number">

                <label for="cadcardetalhes">Detalhes</label>
                <input name="detalhes" type="text">

              
                <label for="cadcarimagem">Imagem</label>
                <input name="imagem" type="file" accept="image/*">

                <input type="submit" value="Salvar">
            </div>
        </form>
        <br><br>
    </div>
</div>