<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/globalstyle.css">
    <title>Modulo de Admin</title>
</head>
<body>
    <h1>Módulo de Admin</h1>
<?php if(session('Mensaje')): ?>
    <div class="tostada">
        <?= view('partials/_session') ?>
    </div>
    <?php endif ?>

  <?= $this->renderSection('contenido') ?>
    
</body>
</html>