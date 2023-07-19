




<?= $this->extend('Layouts/dashboard') ?>
<?= $this->section('contenido') ?>

<div class="container">
    
<div class="d-flex align-items-center justify-content-between ">
        <h1><?= $pelicula['titulo'] ?></h1>
        <a href="<?php echo base_url().'dashboard/pelicula'?>" class="btn  btn-primary">volver</a>
    </div>

    <p><?= $pelicula['description'] ?></p>
    <h3>Imágenes:</h3>
    <br>
    <ul class="tscroll shadow border rounded">
        <?php foreach ($images as $i):?>
         <li>Imagen:     <?= $i['imagen'].' '?>,
             Extension:  <?= $i['extension'].' '?>
             Data:  <?= $i['data']?>        
        </li>  
        <?php endforeach ?>    
    </ul>
    <h3>Etiquetas: </h3>
    <br>
       <div class="d-flex align-items-center justify-start gap-3">

           <?php foreach ($etiquetas as $e):?>
              <form action="<?= route_to('pelicula.etiqueta_delete', $pelicula['id'], $e['id'])?>" method="post">
            <button type="submit" class="btn btn-sm btn-outline-primary">
                <?= $e['id'].' '?> - <?= $e['titulo'].' '?>,
                  
           </button>
           </form>
           <?php endforeach ?>  
            
       </div>
   
</div>


<?= $this->endSection() ?>