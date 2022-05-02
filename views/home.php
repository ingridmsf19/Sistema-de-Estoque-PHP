<a href="<?php echo BASE_URL; ?>home/add">Adicionar Produto</a><br><br>

<a href="<?php echo BASE_URL; ?>relatorio">Relatorio</a><br><br>



<fieldset>
    <form method="GET">
        <input type="text" id="busca" name="busca" value="<?php echo (!empty($_GET['busca']))?$_GET['busca']:'';?>" placeholder="Digite o codigo de barras ou o nome do produto" style="width: 100%; height:40px; font-size: 18px" autofocus>
    </form>
</fieldset><br><br>

<table border="1" width="100%">
    <tr>
        <th>Cod.</th>
        <th>Nome</th>
        <th>Preço Unit.</th>
        <th>Qtd.</th>
        <th>Ações</th>
    </tr>

    <?php foreach($list as $item): ?>

        <tr>
            <td><?php echo $item['cod'];?></td>
            <td><?php echo $item['name'];?></td>
            <td>R$ <?php echo number_format($item['price'], 2, ',', '.') ;?></td>
            <td><?php echo $item['quantity'];?></td>
            <td>
                <a href="<?php echo BASE_URL; ?>home/edit/<?php echo $item['id']; ?>">Editar</a>
            </td>
        </tr>

        <?php endforeach; ?>
</table>