<div class="navbar bg-success text-light d-flex justify-content-center mb-5">
    <h2>Relatório</h2>
</div>

<div class="container">
    <table class="table table-striped table-hover border border-dark">

        <thead class="thead-dark ">
            <tr>
                <th scope="col">Nome do Produto</th>
                <th scope="col">Qtd.</th>
                <th scope="col">Qtd. min.</th>
                <th scope="col">Diferença</th>
            </tr>
        </thead>

        <?php foreach ($list as $item) : ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td><?php echo $item['min_quantity']; ?></td>
            <td><?php echo floatVal($item['min_quantity']) - floatVal($item['quantity']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
</div>
    <div class="row">
        <div class="col mb-3 d-flex justify-content-center">

            <a class="btn btn-success btn-lg font-weight-bold" href="<?php echo BASE_URL; ?>">Voltar</a>

        </div>
    </div>
</div>

<script type="text/javascript">
    window.print();
</script>