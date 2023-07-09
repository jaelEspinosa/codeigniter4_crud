<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo base_url()?>/css/globalstyle.css">
    <title>Modulo de Admin</title>
</head>
<body>
    
    <div class="mx-5 mt-5 d-flex align-items-center justify-content-around">
        <h1>Módulo de Admin</h1>
        <a class="btn btn-sm btn-outline btn-primary" href="<?= base_url().'logout'?>">
            <i class="fa-sharp fa-solid fa-arrow-right-from-bracket"></i> Logout
        </a>
    </div>
    <div class="border shadow-lg mb-5"></div>

<?php if(session('Mensaje')): ?>
    <div class="tostada">
        <?= view('partials/_session') ?>
    </div>
    <?php endif ?>

  

  <?= $this->renderSection('contenido') ?>
    
</body>
</html>