


        
    <div class="form-group col-md-6">
        <label for="titulo">Título  </label>
            <input class="form-control" type="text" placeholder="titulo" id="titulo" name="titulo" value="<?= $pelicula['titulo']?> ">
      
    </div>
    <div class="form-group col-md-6">
        <label for="description">Descripción </label>
            <textarea class="form-control"  placeholder="Descripción" id="description" name="description"><?= $pelicula['description']?></textarea>
       
    </div>
    
    <div class="col-md-6 row mx-1">
        <button class="btn btn-primary col-8"><?= $oc ?></button>
    </div>

    
