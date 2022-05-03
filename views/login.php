<link rel="stylesheet" href="./Formatacao/css/login.css">

<div class="card text-center container d-flex justify-content-center" id="telaLogin" style="width: 25rem;">
    <div class="card-body">
        <form method="POST">

            <input type="text" class="form-control" placeholder="Seu número" name="number" autofocus required><br><br>

            <input type="password" class="form-control" placeholder="Sua senha" name="password" required><br><br>

            <button type="submit" class="btn btn-lg btn-info btn-block mb-3">Entrar</button>

        </form>
    </div>

</div>

<?php if (!empty($msg)) : ?>
    <h2><?php echo $msg; ?></h2>
<?php endif; ?>
