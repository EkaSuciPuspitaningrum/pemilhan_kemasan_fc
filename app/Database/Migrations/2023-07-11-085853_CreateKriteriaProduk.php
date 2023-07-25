<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKriteriaProduk extends Migration
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
            'id_kriteria' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'kriteria_produk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            // 'keterangan_kriteria' => [
            //     'type'       => 'VARCHAR',
            //     'constraint' => '100',
            // ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp', 
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kriteria_produk');
    }

    public function down()
    {
        $this->forge->dropTable('kriteria_produk');
    }
}
