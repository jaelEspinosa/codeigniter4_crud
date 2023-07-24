
   <?= $this->extend('Layouts/dashboard') ?>
   <?= $this->section('contenido') ?>
   <div class="container">
  
  <h2 >Listado de categorias</h2>
  <p><?php echo $nombreVariableVista ?></p>

  

  <a class="btn btn-primary m-5" href="/dashboard/categoria/new">Crear</a>
  <div class="border roundez shadow">
  <table class="table table-striped-columns">
      <tr>
          <th>id</th>
          <th>titulo</th>
          <th>Opciones</th>
      </tr>
      <?php foreach ($categorias as $key => $value) : ?>

            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['titulo'] ?></td>               
                <td class="d-flex align-items-center justify-content-around">
                <!-- <a class="btn btn-sm btn-success" href="/dashboard/categoria/show/<?= $value['id']?>">Show</a>  -->
                <a class="btn btn-sm btn-primary" href="/dashboard/categoria/edit/<?= $value['id']?>">Edit</a>                   
            
                 <form action="/dashboard/categoria/delete/<?= $value['id']?>" method="post">
                    <button  class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                </form>
             </td>
            </tr>

            <?php endforeach ?> 
        </table>
    </div>
    <div>
        <a class="btn bnt-sm btn-outline-primary mt-4" href="<?=base_url()?>dashboard/pelicula">peliculas</a>
        <a class="btn bnt-sm btn-outline-primary mt-4" href="<?= base_url() ?>dashboard/etiqueta">Etiquetas</a>
    </div>
    <div class="border shadow rounded mt-5 p-2">
         <h5>Pag.</h5>
         <?= $pager->links() ?>
    </div>
</div>   

   <?= $this->endSection() ?>
