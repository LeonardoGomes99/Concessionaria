<style>
    html {
        background: url("src/public/background3.jpg") no-repeat center fixed;
        background-size: cover;
    }
</style>

<form enctype="multipart/form-data" action="car/cadastrar" method="post">
    <div class="boxaddcar">
            <label class="cadcarmarca" for="cadcarmarca">Marca Carro</label>
        <input name="marca" type="text">
          
            <label class="cadcarmodelo" for="cadcarmodelo">Modelo</label>
        <input name="modelo" type="text">

            <label class="cadcarpreco" for="cadcarpreco">Preço</label>
        <input name="preco" type="text">
            
            <label class="cadcardetalhes" for="cadcardetalhes">Detalhes</label>
        <input name="detalhes" type="text">
            
        <br><br>
            <label class="cadcarimagem" for="cadcarimagem">Imagem</label>
        <input name="imagem" type="file" accept="image/*">
            
        <input type="submit" value="Salvar">
    </div>
</form>