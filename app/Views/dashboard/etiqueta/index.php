

<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>

<div class="container">
    <h2>Listado de etiquetas</h2>
     <?php if($user):?>
    <h2>User: <?= $user['username'] ?></h2>
    <?php endif ?>
    
    <p><?php echo $nombreVariableVista ?></p>

    <a class="btn btn-primary m-5" href="/dashboard/etiqueta/new">Crear</a>
    <div class="tscroll border rounded shadow">

        <table class="table table-striped-columns">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                
                <th>Categoria</th>
                <th>Opciones</th>
            </tr>
            <?php foreach ($etiquetas as $key => $value) : ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['titulo'] ?></td>
                   
                    <td><?php 
                        foreach ($categorias as $key => $c) {
                           if($c['id']==$value['categoria_id']){
                            echo ($c['titulo']);
                           }
                        }
                    
                    ?></td>
                    <td class="d-flex align-items-center justify-content-around">
                        <a class="btn btn-sm btn-success" href="/dashboard/etiqueta/show/<?= $value['id'] ?>">Show</a>
                        <a class="btn btn-sm btn-primary" href="/dashboard/etiqueta/edit/<?= $value['id'] ?>">Edit</a>
                  
    
                        <form action="/dashboard/etiqueta/delete/<?= $value['id'] ?>" method="post">
                            <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <div>
        <a class="btn bnt-sm btn-outline-primary mt-4" href="<?= base_url() ?>dashboard/categoria">categorias</a>
        <a class="btn bnt-sm btn-outline-primary mt-4" href="<?=base_url()?>dashboard/pelicula">peliculas</a>
    </div>
    <div class="border shadow rounded mt-5 p-2">
         <h5>Pag.</h5>
         <?= $pager->links() ?>
    </div>
</div>


<?= $this->endSection() ?>



