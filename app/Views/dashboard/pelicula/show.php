




<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>

<div>
     <h1><?= $pelicula['titulo'] ?></h1>
    <p><?= $pelicula['description'] ?></p>
</div>


<?= $this->endSection() ?>