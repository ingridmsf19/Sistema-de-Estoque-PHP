<h1>Editar Produto</h1>

<a href="<?php echo BASE_URL; ?>">Voltar</a>

<form method="POST">
    Codigo de Barras:<br>
    <input type="text" name="cod" value="<?php echo $info['cod']; ?>"> <br><br>

    Nome do Produto:<br>
    <input type="text" name="name" value="<?php echo $info['name']; ?>"> <br><br>

    Preço do Produto: <br>
    <input type="text" name="price" value="<?php echo $info['price']; ?>"> <br><br>

    Quantidade:<br>
    <input type="text" name="quantity" value="<?php echo $info['quantity']; ?>"> <br><br>

    Qtd. Mínima: <br>
    <input type="text" name="min_quantity" value="<?php echo $info['min_quantity']; ?>"> <br><br>

    <input type="submit" value="Alterar Produto">
</form>