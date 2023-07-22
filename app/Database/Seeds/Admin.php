<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'email'    => 'admin@gmail.com',
            'password'    => 'Admin',
        ];

        // Using Query Builder
        $this->db->table('admin')->insert($data);
    }
}
