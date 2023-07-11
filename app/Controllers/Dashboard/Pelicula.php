<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;
use App\Models\PeliculaModel;

class Pelicula extends BaseController

{




  public function index()
  {
    $session = session();
    $user = $session->get('user');
    $peliculaModel = new PeliculaModel();
    $peliculas = $peliculaModel ->findAll();
    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel->find();
  
      
       $data = ['nombreVariableVista'=>'Contenido', 'peliculas' => $peliculas, 'user' => $user, 'categorias'=>$categorias];

       
       return view('dashboard/pelicula/index', $data);
       
    }
    
    public function new()
    {
      $pelicula = ['id'=>'','titulo'=>'','description'=>'', 'categoria_id'=>''];

      $categoriaModel = new CategoriaModel();
      $categorias = $categoriaModel->find();

     return view ('dashboard/pelicula/new',['pelicula'=>$pelicula, 'categorias'=>$categorias]);
    }

    public function show($id)
    {
      $peliculaModel = new PeliculaModel();
      $categoriaModel = new CategoriaModel();
    
      $pelicula = $peliculaModel->find($id);
      $categorias = $categoriaModel->find();
    
      echo view('dashboard/pelicula/show', ['pelicula' => $pelicula, 'categorias' => $categorias]);
    }

    

   public function create(){

    $peliculaModel = new PeliculaModel();
    
    if ($this->validate('peliculas')){
      
      $peliculaModel -> insert([
        'titulo' => $this->request->getPost('titulo'),
        'description' => $this->request->getPost('description'),
        'categoria_id' => $this->request->getPost('categoria_id')
      ]);

    }else{
      session()->setFlashdata([
        'validation' => $this->validator
      ]);
      return redirect()->back()->withInput();

    }
   return redirect()->to('/dashboard/pelicula')->with('Mensaje','Registro creado correctamente');
  }




  public function edit($id) 
  {
    $peliculaModel = new PeliculaModel();
    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel->find();
    
    echo view ('dashboard/pelicula/edit',['pelicula' => $peliculaModel->find($id), 'categorias' => $categorias]);
  }




  public function update($id) 
  {
    $peliculaModel = new PeliculaModel();

    if ($this->validate('peliculas')){
      $peliculaModel -> update($id,[
        'titulo' => $this->request->getPost('titulo'),
        'description' => $this->request->getPost('description'),
        'categoria_id' => $this->request->getPost('categoria_id')
      ]);
    }else{
      session()->setFlashdata([
        'validation' => $this->validator
      ]);
      return redirect()->back()->withInput();
    }


    return redirect()->to('/dashboard/pelicula')->with('Mensaje','Registro actualizado correctamente');
  }



 public function delete($id) 
 {
  $peliculaModel = new PeliculaModel();
  $peliculaModel->delete($id);

  session()->setFlashdata('Mensaje', 'Registro eliminado correctamente'); // otra manera de mostrar el mensaje flash

 // return redirect()->to('/dashboard/pelicula')->with('Mensaje','Registro eliminado correctamente');
  return redirect()->to('/dashboard/pelicula');
 } 
}


?>