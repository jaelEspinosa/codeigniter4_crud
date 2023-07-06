<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'username'=>[
                'type' => 'VARCHAR',
                'constraint' =>255               
            ],
            'email'=>[
                'type' => 'VARCHAR',
                'constraint' =>255                
            ],
            'password'=>[
                'type' => 'VARCHAR',
                'constraint' =>60                
            ],

        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
