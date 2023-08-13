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
            'jenis_kemasan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true, // Match the UNSIGNED constraint of the referenced column
            ],
            'kriteria_produk_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
            ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp', 
        ]);
        $this->forge->addKey('id', true);

        // Add foreign keys
        $this->forge->addForeignKey('jenis_kemasan_id', 'jenis_kemasan', 'id');
        $this->forge->addForeignKey('kriteria_produk_id', 'kriteria_produk', 'id');

        // Create the 'basis_pengetahuan' table
        $this->forge->createTable('basis_pengetahuan');
    }

    public function down()
    {
        // Drop the 'basis_pengetahuan' table
        $this->forge->dropTable('basis_pengetahuan');
    }
}
