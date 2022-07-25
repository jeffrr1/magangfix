<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CpuUsage extends Migration
{
    public function up()
    {
         // tabel users
         $this->forge->addField([
            'id_cpuusage'       => [
                'type'           => 'INT',
                'constraint'     => 20,
                'auto_increment' => true,
            ],
            'usage'=>[
                'type' => 'FLOAT',
                'constraint' => 20,
                'auto_increment' => false,
            ],
            
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('id_cpuusage', true);
        $this->forge->createTable('cpuusage');
    }

    public function down()
    {
        $this->forge->dropTable('cpuusage');
    }
}
