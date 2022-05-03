

<div class="navbar bg-warning text-light d-flex justify-content-center mb-5">
    <h2>Editar Produto</h2>
</div>

<form method="POST">
    <div class="container border d-flex justify-content-center card">
        <div class="row ">
            <div class="col mt-2">

                <h4 class="">Código de Barras:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="cod" value="<?php echo $info['cod']; ?>" autofocus>

                <h4 class="">Preço do Produto:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="price" value="<?php echo $info['price']; ?>">

            </div>
            <div class="col mt-2">

                <h4 class="">Nome do Produto:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="name" value="<?php echo $info['name']; ?>">

                <h4 class="">Qtd. Mínima:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="min_quantity" value="<?php echo $info['min_quantity']; ?>">

            </div>
            <div class="col mt-2">

                <h4 class="">Quantidade:</h4>
                <input class="form-control mb-3 mt-1" type="text" name="quantity" value="<?php echo $info['quantity']; ?>">

            </div>
        </div>
        <div class="row">
            <div class="col mb-3 d-flex justify-content-center">
                <input type="submit" class="btn btn-warning btn-lg mr-1 text-light font-weight-bold" value="Editar Produto">

                <a class="btn btn-success btn-lg font-weight-bold" href="<?php echo BASE_URL; ?>">Voltar</a>

            </div>
        </div>
    </div>
</form>