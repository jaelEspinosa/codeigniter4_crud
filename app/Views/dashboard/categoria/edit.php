<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Actualizar categoria</title>
</head>
<body>
  
    <div class="container">
    <?= view('partials/_session') ?>
   <h1 class="text-center">Actualizar Categoria</h1>

    <form  class="row border mt-5 m-2 p-5 shadow rounded" action="/dashboard/categoria/update/<?= $categoria['id']?>" method="post">
        
    <?= view('dashboard/categoria/_form', ['oc' => 'Actualizar']) ?>
        
    </form>
    </div> 
</body>
</html>