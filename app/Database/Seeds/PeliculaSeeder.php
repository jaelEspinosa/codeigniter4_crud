<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    public function run()
    {
        
          // $this->db->table('categorias');

          // $peliculaModel = new PeliculaModel();  // esto es para borrar la semilla que haya en la db
    
          for ($i=0; $i < 20; $i++) { 

            // $peliculaModel->where('id>=', 1)->delete // esto es para borrar la semilla que haya en la db
            
              $this->db->table('peliculas')->insert(
               [
                 'titulo' => "Pelicula $i",
                 'description' => "description de la pelicula nº $i"
               ]
               );
          }
    
        }
    }
        
    

