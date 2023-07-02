<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController

{

  public function index()
  {

    $peliculaModel = new PeliculaModel();
    $peliculas = $peliculaModel ->findAll();
  
      
       $data = ['nombreVariableVista'=>'Contenido', 'peliculas' => $peliculas];
       return view('pelicula/index', $data);
    }
    
    public function new()
    {
      $pelicula = ['id'=>'','titulo'=> '', 'description'=>''];

      echo view ('pelicula/new',['pelicula'=>$pelicula]);
    }

    public function show($id)
    {
      $peliculaModel = new PeliculaModel();
    
      $pelicula = $peliculaModel->find($id);
    
      echo view('pelicula/show', ['pelicula' => $pelicula]);
    }

   public function create(){

    $peliculaModel = new PeliculaModel();

    $peliculaModel -> insert([
      'titulo' => $this->request->getPost('titulo'),
      'description' => $this->request->getPost('description')
    ]);
   echo ('creado');
  }


  public function edit($id) 
  {
    $peliculaModel = new PeliculaModel();
    
    echo view ('pelicula/edit',['pelicula' => $peliculaModel->find($id)]);
  }

  public function update($id) 
  {
    $peliculaModel = new PeliculaModel();

    $peliculaModel -> update($id,[
      'titulo' => $this->request->getPost('titulo'),
      'description' => $this->request->getPost('description')
    ]);
   return ('actualizado');
  }

 public function delete($id) 
 {
  $peliculaModel = new PeliculaModel();
  $peliculaModel->delete($id);

   return ('Eliminado');
 } 
}


?>