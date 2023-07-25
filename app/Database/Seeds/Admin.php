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
            'password'    => 'admin',
            'password_hash'   =>password_hash(('admin'), PASSWORD_BCRYPT)
            
        ];

        // Using Query Builder
        $this->db->table('admin')->insert($data);
    }
}
