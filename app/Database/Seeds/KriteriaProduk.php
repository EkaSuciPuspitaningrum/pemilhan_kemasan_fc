<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KriteriaProduk extends Seeder
{
    public function run()
    {
        // $data =[
        //     ['id'=> 1 , 'id_kriteria'=> "K-1", 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin', 'keterangan_kriteria' => ' Dapat disimpan dalam freezer dengan suhu lebih dari sama dengan -30 C'],
        //     ['id'=> 2 , 'id_kriteria'=> "K-2", 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang', 'keterangan_kriteria' => ''],
        //     ['id'=> 3 , 'id_kriteria'=> "K-3", 'kriteria_produk' => 'Mengandung air', 'keterangan_kriteria' => ''],
        //     ['id'=> 4 , 'id_kriteria'=> "K-4", 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air', 'keterangan_kriteria' => ''],
        //     ['id'=> 5 , 'id_kriteria'=> "K-5", 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas', 'keterangan_kriteria' => ''],
        //     ['id'=> 6 , 'id_kriteria'=> "K-6", 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap', 'keterangan_kriteria' => ''],
        //     ['id'=> 7 , 'id_kriteria'=> "K-7", 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'keterangan_kriteria' => ''],
        //     ['id'=> 8 , 'id_kriteria'=> "K-8", 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'keterangan_kriteria' => ''],
        //     ['id'=> 9 , 'id_kriteria'=> "K-9", 'kriteria_produk' => 'Bersifat tajam atau berduri', 'keterangan_kriteria' => ''],
        //     ['id'=> 10 , 'id_kriteria'=> "K-10", 'kriteria_produk' => 'Mengandung lemak atau minyak', 'keterangan_kriteria' => ''],
        //     ['id'=> 11 , 'id_kriteria'=> "K-11", 'kriteria_produk' => 'Mengandung asam', 'keterangan_kriteria' => ''],
        //     ['id'=> 12 , 'id_kriteria'=> "K-12", 'kriteria_produk' => 'Beraroma', 'keterangan_kriteria' => ''],
        //     ['id'=> 13 , 'id_kriteria'=> "K-13", 'kriteria_produk' => 'Beralkohol', 'keterangan_kriteria' => ''],
        //     ['id'=> 14 , 'id_kriteria'=> "K-14", 'kriteria_produk' => 'Mengandung bahan kimia', 'keterangan_kriteria' => 'Seperti asam formal, fenol (terkandung dalam makanan yang melalui proses pengasapan), pelarut petroleum (pengatur kadar lemak dan minyak), zat pengatur keasaman)'],
        //  ];



        $data =[
            ['id'=> 1 , 'kriteria_produk' => 'Mudah rusak karena air', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 2 , 'kriteria_produk' => 'Mudah menyerap gas ruangan (oksigen)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 3 , 'kriteria_produk' => 'Mudah rusak karena uap air (lembab)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 4 , 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 5 , 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 6 , 'kriteria_produk' => 'Bersifat tajam atau berduri', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 7 , 'kriteria_produk' => 'Mengandung lemak atau minyak', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 8 , 'kriteria_produk' => 'Produk dapat divacuum', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 9 , 'kriteria_produk' => 'Produk mengandung vitamin', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 10  , 'kriteria_produk' => 'Mengandung asam (fermentasi)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 11  , 'kriteria_produk' => 'Beraroma', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 12  , 'kriteria_produk' => 'Beralkohol', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 13  , 'kriteria_produk' => 'Mengandung bahan kimia (asam formal, fenol (terkandung dalam makanan yang melalui proses pengasapan), pelarut petroleum (pengatur kadar lemak dan minyak), zat pengatur keasaman)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 14  , 'kriteria_produk' => 'Produk kering', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 15  , 'kriteria_produk' => 'Produk basah', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 16  , 'kriteria_produk' => 'Produk berair banyak atau berkuah', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 17  , 'kriteria_produk' => 'Produk tersaji panas (60°C - 80°C)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 18  , 'kriteria_produk' => 'Disimpan pada suhu ruang (15°C - 30°C)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 19  , 'kriteria_produk' => 'Disimpan di dalam kulkas (4°C - 1,7°C)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
            ['id'=> 20  , 'kriteria_produk' => 'Disimpan di dalam freezer (sampai -17°C)', 'creted_date' => date("Y-m-d H:i:s"),
                'update_date' => date("Y-m-d H:i:s") ],
        ];


        //     ['id'=> 1 , 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
        //     ['id'=> 2 , 'kriteria_produk' => 'Dapat disimpan dalam suhu ruang'],
        //     ['id'=> 3 , 'kriteria_produk' => 'Mengandung air'],
        //     ['id'=> 4 , 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'],
        //     ['id'=> 5 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'],
        //     ['id'=> 6 , 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'],
        //     ['id'=> 7 , 'kriteria_produk' => 'Mengandung bahan pengawet buatan'],
        //     ['id'=> 8 , 'kriteria_produk' => 'Mengandung bahan pewarna buatan'],
        //     ['id'=> 9 , 'kriteria_produk' => 'Bersifat tajam atau berduri'],
        //     ['id'=> 10 ,  'kriteria_produk' => 'Mengandung lemak atau minyak'],
        //     ['id'=> 11 ,  'kriteria_produk' => 'Mengandung asam'],
        //     ['id'=> 12 ,  'kriteria_produk' => 'Beraroma'],
        //     ['id'=> 13 ,  'kriteria_produk' => 'Beralkohol'],
        //     ['id'=> 14 ,  'kriteria_produk' => 'Mengandung bahan kimia'],
        //  ];

        // Using Query Builder
        $this->db->table('kriteria_produk')->insertBatch($data);
    }
}
