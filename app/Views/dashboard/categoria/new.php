
<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>
<div class="container">
    <h2 class="text-center">Nueva Categoria</h2>

    <form class="row border mt-5 m-2 p-5 shadow rounded" action="/dashboard/categoria/create" method="post">

        <?= view('dashboard/categoria/_form', ['oc' => 'Crear']) ?>
    </form>
</div>
<?= $this->endSection('Layouts/dashboard') ?>


