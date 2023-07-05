


        
    <div class="form-group col-md-6">
        <label for="titulo">Título  </label>
            <input class="form-control <?= session('validation') && session('validation')->hasError('titulo') ? 'is-invalid' : ''; ?>" 
                    type="text" placeholder="titulo" id="titulo" name="titulo" value="<?=old('titulo',$pelicula['titulo'])?> ">
      
    </div>
    <div class="form-group col-md-6">
        <label for="description">Descripción </label>
            <textarea class="form-control <?= session('validation') && session('validation')->hasError('description') ? 'is-invalid' : '';?>"  
            placeholder="Descripción" 
            id="description" 
            name="description"><?=old('description',$pelicula['description'])?></textarea>
       
    </div>
    
    <div class="col-md-6 row mx-1">
        <button class="btn btn-primary col-4"><?= $oc ?></button>
        <div class="col-4"></div>
        <a href="<?php echo base_url().'dashboard/pelicula'?>" class="btn btn-primary col-4">volver</a>

    </div>

    
