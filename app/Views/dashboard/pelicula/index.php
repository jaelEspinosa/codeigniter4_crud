<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>


<h2>Listado de peliculas</h2>
<?php if ($user) : ?>
    <h2>User: <?= $user['username'] ?></h2>
<?php endif ?>

<p><?php echo $nombreVariableVista ?></p>

<a class="btn btn-primary mx-3 my-4" href="/dashboard/pelicula/new"><i class="fa fa-add"></i></a><span class="span">Nueva película</span>
<div class="border rounded shadow">

    <table class="table table-striped-columns">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Categoria</th>
            <th>Acc</th>
            <th>Acc</th>
        </tr>
        <?php foreach ($peliculas as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['titulo'] ?></td>
                <td><?= $value['description'] ?></td>
                <td><?php
                    foreach ($categorias as $key => $c) {
                        if ($c['id'] == $value['categoria_id']) {
                            echo ($c['titulo']);
                        }
                    }

                    ?></td>
                <td style="width: 100px;">   
                <div class="d-flex align-items-center gap-1">              
                        <a class="btn btn-sm btn-success" href="/dashboard/pelicula/show/<?= $value['id'] ?>"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-sm btn-warning" href="<?= route_to('pelicula.etiquetas', $value['id']) ?>"><i class="fa fa-tag"></i></a>    
                    </div>
                </td>                 
                <td style="width: 100px;">
                    <div class="d-flex align-items-center gap-1">
                        <a class="btn btn-sm btn-primary" href="/dashboard/pelicula/edit/<?= $value['id'] ?>"><i class="fa fa-edit"></i></a>
                        <form action="/dashboard/pelicula/delete/<?= $value['id'] ?>" method="post">
                            <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                        </form> 
                    </div>
                </td>
                
            </tr>
        <?php endforeach ?>
    </table>
</div>

<?= $pager->links() ?>

<?= $this->endSection() ?>