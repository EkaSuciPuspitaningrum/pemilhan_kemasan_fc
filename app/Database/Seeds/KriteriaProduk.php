<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KriteriaProduk extends Seeder
{
    public function run()
    {
        // $data =[
        //     ['id'=> 1 , 'id_kriteria'=> "P-1", 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'keterangan_kriteria' => ' Dapat disimpan dalam freezer dengan suhu lebih dari sama dengan -30 C'],
        //     ['id'=> 2 , 'id_kriteria'=> "P-2", 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang', 'keterangan_kriteria' => ''],
        //     ['id'=> 3 , 'id_kriteria'=> "P-3", 'kriteria_produk' => 'Mengandung air', 'keterangan_kriteria' => ''],
        //     ['id'=> 4 , 'id_kriteria'=> "P-4", 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'keterangan_kriteria' => ''],
        //     ['id'=> 5 , 'id_kriteria'=> "P-5", 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'keterangan_kriteria' => ''],
        //     ['id'=> 6 , 'id_kriteria'=> "P-6", 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'keterangan_kriteria' => ''],
        //     ['id'=> 7 , 'id_kriteria'=> "P-7", 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'keterangan_kriteria' => ''],
        //     ['id'=> 8 , 'id_kriteria'=> "P-8", 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'keterangan_kriteria' => ''],
        //     ['id'=> 9 , 'id_kriteria'=> "P-9", 'kriteria_produk' => 'Bersifat tajam atau berduri', 'keterangan_kriteria' => ''],
        //     ['id'=> 10 , 'id_kriteria'=> "P-10", 'kriteria_produk' => 'Mengandung lemak atau minyak', 'keterangan_kriteria' => ''],
        //     ['id'=> 11 , 'id_kriteria'=> "P-11", 'kriteria_produk' => 'Mengandung asam', 'keterangan_kriteria' => ''],
        //     ['id'=> 12 , 'id_kriteria'=> "P-12", 'kriteria_produk' => 'Beraroma', 'keterangan_kriteria' => ''],
        //     ['id'=> 13 , 'id_kriteria'=> "P-13", 'kriteria_produk' => 'Beralkohol', 'keterangan_kriteria' => ''],
        //     ['id'=> 14 , 'id_kriteria'=> "P-14", 'kriteria_produk' => 'Mengandung bahan kimia', 'keterangan_kriteria' => 'Seperti asam formal, fenol (terkandung dalam makanan yang melalui proses pengasapan), pelarut petroleum (pengatur kadar lemak dan minyak), zat pengatur keasaman)'],
        //  ];



        $data =[
            ['id'=> 1 , 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
            ['id'=> 2 , 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang'],
            ['id'=> 3 , 'kriteria_produk' => 'Mengandung air'],
            ['id'=> 4 , 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'],
            ['id'=> 5 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'],
            ['id'=> 6 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'],
            ['id'=> 7 , 'kriteria_produk' => 'Mengandung bahan pengawet buatan'],
            ['id'=> 8 , 'kriteria_produk' => 'Mengandung bahan pewarna buatan'],
            ['id'=> 9 , 'kriteria_produk' => 'Bersifat tajam atau berduri'],
            ['id'=> 10 ,  'kriteria_produk' => 'Mengandung lemak atau minyak'],
            ['id'=> 11 ,  'kriteria_produk' => 'Mengandung asam'],
            ['id'=> 12 ,  'kriteria_produk' => 'Beraroma'],
            ['id'=> 13 ,  'kriteria_produk' => 'Beralkohol'],
            ['id'=> 14 ,  'kriteria_produk' => 'Mengandung bahan kimia'],
         ];

        // Using Query Builder
        $this->db->table('kriteria_produk')->insertBatch($data);
    }
}
