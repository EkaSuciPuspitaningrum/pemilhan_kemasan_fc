<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('Admin');
        $this->call('JenisKemasan');
        $this->call('KriteriaProduk');
        $this->call('BasisPengetahuan');
    }
}
