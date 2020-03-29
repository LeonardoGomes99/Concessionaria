<style>
    html {
        background: url("src/public/background.jpg") no-repeat center fixed;
        background-size: cover;
    }

    .devcard {
        margin: 30px;
        margin-top: 100px;
        position: relative;
        display: inline-block;
        width: 300px;
        text-align: center;
        background-color: rgba(0, 0, 0, 0.9);
        box-shadow: 0px 0px 10px 2px #4D4DFF;
        color: white;
        border-radius: 3px;
    }

    .devcard img {
        border-radius: 3px 3px 0px 0px;
        width: 100%;
    }

    .devcard .nome {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 30px;
    }

    .devcard .funcao {
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: 25px;
    }

    .devs {
        display: block;
    }

    .areas {
        width: 100%;
        display: block;
        text-align: center;
    }
</style>

<div class="areas">
    <div class="devs">
        <div class="devcard">
            <div class="image">
                <img src="src/public/team/leonardo.jpg" class="carimg">
            </div>
            <div class="nome">
                Leonardo Gomes
            </div>
            <div class="funcao">
                Web designer
            </div>
        </div>
        <div class="devcard">
            <div class="image">
                <img src="src/public/team/jhonatan.jpg" class="carimg">
            </div>
            <div class="nome">
                Jhonatan Luiz
            </div>
            <div class="funcao">
                Developer
            </div>
        </div>
    </div>
</div>