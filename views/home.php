<div class="container-fluid mt-3">

    <a class="btn btn-primary" href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a>
  
    <a class="btn btn-success" href="<?php echo BASE_URL; ?>relatorio">Relatorio</a><br><br>
</div>

<div class="input-group mb-3">
    <form method="GET" class="container-fluid ">
        <input type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca'])) ? $_GET['busca'] : ''; ?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Digite o codigo de barras ou o nome do produto..." autofocus>
    </form>
</div>

<div class="container-fluid">
    <table class="table table-striped table-hover border border-dark">

        <thead class="thead-dark ">
            <tr>
                <th scope="col">Cod</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço Unit.</th>
                <th scope="col">Qtd.</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>

        <?php foreach ($list as $item) : ?>

            <tr>
                <td><?php echo $item['cod']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td>R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></td>
                <td><?php echo $item['quantity']; ?></td>
                <td>
                    <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>