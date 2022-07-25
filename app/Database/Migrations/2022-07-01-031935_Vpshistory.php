<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vpshistory extends Migration
{
    public function up()
    {
        // tabel users
        $this->forge->addField([
            'id_vpshistory'       => [
                'type'           => 'INT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id_vpshistory', true);
        $this->forge->createTable('vpshistory');
    }


    public function down()
    {
        $this->forge->dropTable('vpshistory');
    }
}
