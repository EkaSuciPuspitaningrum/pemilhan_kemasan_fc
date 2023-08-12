<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class JenisKemasan extends Seeder
{
    public function run()
    {
        // $data = [
        //     ['id'=> 1 , 'id_kemasan'=> "P-1", 'jenis_kemasan' => 'Plastik PET/PETE', 'keterangan_kemasan' => ''],
        //     ['id'=> 2 , 'id_kemasan'=> "P-2", 'jenis_kemasan' => 'Plastik HDPE', 'keterangan_kemasan' => ''],
        //     ['id'=> 3 , 'id_kemasan'=> "P-3", 'jenis_kemasan' => 'Plastik PVC', 'keterangan_kemasan' => ''],
        //     ['id'=> 4 , 'id_kemasan'=> "P-4", 'jenis_kemasan' => 'Plastik LDPE', 'keterangan_kemasan' => ''],
        //     ['id'=> 5 , 'id_kemasan'=> "P-5", 'jenis_kemasan' => 'Plastik PP', 'keterangan_kemasan' => ''],
        //     ['id'=> 6 , 'id_kemasan'=> "P-6", 'jenis_kemasan' => 'Plastik PS', 'keterangan_kemasan' => ''],
        //     ['id'=> 7 , 'id_kemasan'=> "P-7", 'jenis_kemasan' => 'Plastik NYLON', 'keterangan_kemasan' => ''],
        // ];
        $data = [
            ['id'=> 1 , 'jenis_kemasan' => 'Plastik PET/PETE', 'keterangan_kemasan' => ''],
            ['id'=> 2 , 'jenis_kemasan' => 'Plastik HDPE', 'keterangan_kemasan' => ''],
            ['id'=> 3 , 'jenis_kemasan' => 'Plastik PVC', 'keterangan_kemasan' => ''],
            ['id'=> 4 , 'jenis_kemasan' => 'Plastik LDPE', 'keterangan_kemasan' => ''],
            ['id'=> 5 , 'jenis_kemasan' => 'Plastik PP', 'keterangan_kemasan' => ''],
            ['id'=> 6 , 'jenis_kemasan' => 'Plastik PS', 'keterangan_kemasan' => ''],
            ['id'=> 7 , 'jenis_kemasan' => 'Plastik NYLON', 'keterangan_kemasan' => ''],
        ];

        // Using Query Builder
        $this->db->table('jenis_kemasan')->insertBatch($data);
    }
}
