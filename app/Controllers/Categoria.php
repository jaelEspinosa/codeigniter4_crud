<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class Categoria extends BaseController

{

  public function index()
  {

    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel ->findAll();
  
      
       $data = ['nombreVariableVista'=>'Contenido', 'categorias' => $categorias];
       return view('categoria/index', $data);
    }
    
    public function new()
    {
      $categoria = ['id'=>'','titulo'=> ''];

      echo view ('categoria/new',['categoria'=>$categoria]);
    }

    public function show($id)
    {
      $categoriaModel = new CategoriaModel();
    
      $categoria = $categoriaModel->find($id);
    
      echo view('categoria/show', ['categoria' => $categoria]);
    }

   public function create(){

    $categoriaModel = new CategoriaModel();

    $categoriaModel -> insert([
      'titulo' => $this->request->getPost('titulo')
    ]);
   echo ('creado');
  }


  public function edit($id) 
  {
    $categoriaModel = new CategoriaModel();
    
    echo view ('categoria/edit',['categoria' => $categoriaModel->find($id)]);
  }

  public function update($id) 
  {
    $categoriaModel = new CategoriaModel();

    $categoriaModel -> update($id,[
      'titulo' => $this->request->getPost('titulo')
    ]);
   return ('actualizado');
  }

 public function delete($id) 
 {
  $categoriaModel = new CategoriaModel();
  $categoriaModel->delete($id);

   return ('Eliminado');
 } 
}


?>