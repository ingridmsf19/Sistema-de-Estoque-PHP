<h1>Adicionar Produto</h1>

<a href="<?php echo BASE_URL; ?>">Voltar</a>

<form method="POST">
    Codigo de Barras:<br>
    <input type="text" name="cod"> <br><br>

    Nome do Produto:<br>
    <input type="text" name="name"> <br><br>

    Preço do Produto: <br>
    <input type="text" name="price"> <br><br>

    Quantidade:<br>
    <input type="text" name="quantity"> <br><br>

    Qtd. Mínima: <br>
    <input type="text" name="min_quantity"> <br><br>

    <input type="submit" value="Adicionar Produto">
</form>