<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCalonPakar extends Migration
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
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password_hash' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'pendidikan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'instansi' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'dokumen' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_date datetime default current_timestamp',
            'updated_date datetime default current_timestamp on update current_timestamp', 
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('calon_pakar');
    }

    public function down()
    {
        $this->forge->dropTable('calon_pakar');
    }
}
