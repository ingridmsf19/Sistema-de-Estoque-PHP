<h1>
    Relatorio
</h1>

<table border="1" width="100%">
    <tr>
        <th>Nome do Produto</th>
        <th>Qtd.</th>
        <th>Qtd. min.</th>
        <th>Diferença</th>
    </tr>
    <?php foreach($list as $item): ?>
        <tr>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['quantity']; ?></td>
            <td><?php echo $item['min_quantity']; ?></td>
            <td><?php echo floatVal($item['min_quantity']) - floatVal($item['quantity']); ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>