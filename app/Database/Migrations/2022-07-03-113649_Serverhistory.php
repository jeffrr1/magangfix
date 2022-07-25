<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Serverhistory extends Migration
{
    public function up()
    {
         // tabel users
         $this->forge->addField([
            'id_serverhistory'       => [
                'type'           => 'INT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'name'=> [
                'type'=>'VARCHAR',
                'constraint'=>20,
                'auto_increment'=> false,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id_serverhistory', true);
        $this->forge->createTable('serverhistory');
    }

    public function down()
    {
        //
        $this->forge->dropTable('serverhistory');
    }
}
