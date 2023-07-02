<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\CategoriaModel;

class Categoria extends BaseController

{

  public function index()
  {

    $categoriaModel = new CategoriaModel();
    $categorias = $categoriaModel ->findAll();
  
      
       $data = ['nombreVariableVista'=>'Contenido', 'categorias' => $categorias];
       return view('dashboard/categoria/index', $data);
    }
    
    public function new()
    {
      $categoria = ['id'=>'','titulo'=> ''];

      echo view ('dashboard/categoria/new',['categoria'=>$categoria]);
    }

    public function show($id)
    {
      $categoriaModel = new CategoriaModel();
    
      $categoria = $categoriaModel->find($id);
    
      echo view('dashboard/categoria/show', ['categoria' => $categoria]);
    }

   public function create(){

    $categoriaModel = new CategoriaModel();

    $categoriaModel -> insert([
      'titulo' => $this->request->getPost('titulo')
    ]);
    return redirect()->to('/dashboard/categoria');
  }


  public function edit($id) 
  {
    $categoriaModel = new CategoriaModel();
    
    echo view ('dashboard/categoria/edit',['categoria' => $categoriaModel->find($id)]);
  }

  public function update($id) 
  {
    $categoriaModel = new CategoriaModel();

    $categoriaModel -> update($id,[
      'titulo' => $this->request->getPost('titulo')
    ]);
    return redirect()->to('/dashboard/categoria');
  }

 public function delete($id) 
 {
  $categoriaModel = new CategoriaModel();
  $categoriaModel->delete($id);

  return redirect()->to('/dashboard/categoria');
 } 
}


?>