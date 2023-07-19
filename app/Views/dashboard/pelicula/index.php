

<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>

<div class="container">
    <h2>Listado de peliculas</h2>
     <?php if($user):?>
    <h2>User: <?= $user['username'] ?></h2>
    <?php endif ?>
    
    <p><?php echo $nombreVariableVista ?></p>

    <a class="btn btn-primary m-5" href="/dashboard/pelicula/new">Crear</a>
    <div class="tscroll border rounded shadow">

        <table class="table table-striped-columns">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Categoria</th>
                <th>Opciones</th>
            </tr>
            <?php foreach ($peliculas as $key => $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['titulo'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><?php 
                        foreach ($categorias as $key => $c) {
                           if($c['id']==$value['categoria_id']){
                            echo ($c['titulo']);
                           }
                        }
                    
                    ?></td>
                    <td class="d-flex align-items-center justify-content-around">
                        <a class="btn btn-sm btn-success" href="/dashboard/pelicula/show/<?= $value['id'] ?>">Show</a>
                        <a class="btn btn-sm btn-primary" href="/dashboard/pelicula/edit/<?= $value['id'] ?>">Edit</a>
                        <a class="btn btn-sm btn-warning" href="<?=route_to('pelicula.etiquetas', $value['id']) ?>">Tags</a>
    
                        <form action="/dashboard/pelicula/delete/<?= $value['id'] ?>" method="post">
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <div>
        <a class="btn bnt-sm btn-outline-primary mt-4" href="<?= base_url() ?>dashboard/categoria">Categorias</a>
        <a class="btn bnt-sm btn-outline-primary mt-4" href="<?= base_url() ?>dashboard/etiqueta">Etiquetas</a>
    </div>
</div>


<?= $this->endSection() ?>



