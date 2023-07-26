<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BasisPengetahuan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'jenis_kemasan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kriteria_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp', 
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('basis_pengetahuan');
    }

    public function down()
    {
        $this->forge->dropTable('basis_pengetahuan');
    }
}
