

<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>

    <h1 class="text-center">Actualizar Pelicula</h1>

    <form class="row border mt-5 m-2 p-5 shadow rounded" action="/dashboard/etiqueta/update/<?= $etiqueta['id'] ?>" method="post">

        <?= view('dashboard/etiqueta/_form', ['oc' => 'Actualizar']) ?>
        <?php if (session('validation')) : ?>
            <div class="validator">
                <?= view('partials/_form-error') ?>
            </div>
        <?php endif ?>
    </form>



<?= $this->endSection() ?>