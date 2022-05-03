<div class="navbar bg-primary text-light d-flex justify-content-center mb-5">
    <h2>Adicionar Produto</h2>
</div>

<form method="POST">
    <div class="container border d-flex justify-content-center card">
        <div class="row ">
            <div class="col mt-2">

                <h4 class="">Código de Barras:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="cod" autofocus>

                <h4 class="">Preço do Produto:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="price">

            </div>
            <div class="col mt-2">

                <h4 class="">Nome do Produto:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="name">

                <h4 class="">Qtd. Mínima:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="min_quantity">

            </div>
            <div class="col mt-2">

                <h4 class="">Quantidade:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="quantity">

            </div>
        </div>
        <div class="row">
            <div class="col mb-3 d-flex justify-content-center">
                <input type="submit" class="btn btn-primary btn-lg mr-1 font-weight-bold" value="Adicionar Produto">

                <a class="btn btn-success btn-lg font-weight-bold" href="<?php echo BASE_URL; ?>">Voltar</a>

            </div>
        </div>
    </div>
</form>