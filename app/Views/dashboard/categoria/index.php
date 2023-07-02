<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Listado de Peliculas</title>
</head>
<body class="container">
    <h1>Listado de categorias</h1>
    <p><?php echo $nombreVariableVista ?></p>
  
    <a class="btn btn-primary m-5" href="/dashboard/categoria/new">Crear</a>
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
        <div>
            <a class="btn bnt-sm btn-outline-primary" href="<?=base_url()?>dashboard/pelicula">peliculas</a>
        </div>
            
</body>
</html>