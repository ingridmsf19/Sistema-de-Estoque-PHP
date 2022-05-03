<div class="navbar navbar-light  bg-dark mb-3">
    <Form method="GET" class="container">
        <div class="input-group">
            <input type="text" class="form-control input" id="busca" name="busca" value="<?php echo (!empty($_GET['busca'])) ? $_GET['busca'] : ''; ?>" placeholder="Digite o codigo de barras ou o nome do produto..." aria-label="Recipient's username with two button addons" aria-describedby="button-addon4" autofocus>

            <div class="input-group-append" id="button-addon4">
                <a class="btn btn-primary font-weight-bold" href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a>

                <a class="btn btn-success font-weight-bold" href="<?php echo BASE_URL; ?>relatorio">Relatorio</a> 

            </div>
        </div>
    </Form>
    <div>
        <a class="btn btn-danger font-weight-bold" href="<?php echo BASE_URL; ?>login/sair">Sair</a>
    </div>
    
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
                    <a class="btn btn-warning text-light font-weight-bold" href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
                </td>
            </tr>

        <?php endforeach; ?>
    </table>
</div>
