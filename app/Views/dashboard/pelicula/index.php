<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url()?>/css/globalstyle.css">
    <title>Listado de Peliculas</title>
</head>
<body >
  <?php if(session('Mensaje')): ?>
    <div class="tostada">
        <?= view('partials/_session') ?>
    </div>
  <?php endif ?> 
    <div class="container">
    <h1>Listado de peliculas</h1>
    <p><?php echo $nombreVariableVista ?></p>
  
    <a class="btn btn-primary m-5" href="/dashboard/pelicula/new">Crear</a>
    <table class="table table-striped-columns">
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>description</th>
            <th>Opciones</th>
        </tr>
        <?php foreach ($peliculas as $key => $value) : ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['titulo'] ?></td>
                <td><?= $value['description']?></td>
                <td class="d-flex align-items-center justify-content-around">
                <a class="btn btn-sm btn-success" href="/dashboard/pelicula/show/<?= $value['id']?>">Show</a> 
                <a class="btn btn-sm btn-primary" href="/dashboard/pelicula/edit/<?= $value['id']?>">Edit</a>                   
            
                 <form action="/dashboard/pelicula/delete/<?= $value['id']?>" method="post">
                    <button  class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                </form>
             </td>
            </tr>
            <?php endforeach ?> 
        </table>
        
        <div>
            <a class="btn bnt-sm btn-outline-primary" href="<?=base_url()?>dashboard/categoria">categorias</a>
        </div>
    </div>        

</body>
</html>