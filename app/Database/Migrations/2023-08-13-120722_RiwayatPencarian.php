<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RiwayatPencarian extends Migration
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
            'namaproduk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'beratproduk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'ukuranproduk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'volumeproduk' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'jenis_kemasan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'persentase_perhitungan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp', 
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('riwayat');
    }

    public function down()
    {
        $this->forge->dropTable('riwayat');
    }
}
