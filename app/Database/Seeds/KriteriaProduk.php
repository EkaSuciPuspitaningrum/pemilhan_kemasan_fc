<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KriteriaProduk extends Seeder
{
    public function run()
    {
        $data =[
            ['id'=> 1 , 'kriteria_produk' => 'Mudah rusak karena air', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 2 , 'kriteria_produk' => 'Mudah menyerap gas ruangan (oksigen)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 3 , 'kriteria_produk' => 'Mudah rusak karena uap air (lembab)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 4 , 'kriteria_produk' => 'Mengandung bahan pengawet buatan', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 5 , 'kriteria_produk' => 'Mengandung bahan pewarna buatan', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 6 , 'kriteria_produk' => 'Bersifat tajam atau berduri', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 7 , 'kriteria_produk' => 'Mengandung lemak atau minyak', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 8 , 'kriteria_produk' => 'Produk dapat divacuum', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 9 , 'kriteria_produk' => 'Produk mengandung vitamin', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 10  , 'kriteria_produk' => 'Mengandung asam (fermentasi)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 11  , 'kriteria_produk' => 'Beraroma', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 12  , 'kriteria_produk' => 'Beralkohol', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 13  , 'kriteria_produk' => 'Mengandung bahan kimia (asam formal, fenol (terkandung dalam makanan yang melalui proses pengasapan), pelarut petroleum (pengatur kadar lemak dan minyak), zat pengatur keasaman)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 14  , 'kriteria_produk' => 'Produk kering', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 15  , 'kriteria_produk' => 'Produk basah', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 16  , 'kriteria_produk' => 'Produk berair banyak atau berkuah', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 17  , 'kriteria_produk' => 'Produk tersaji panas (60°C - 80°C)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 18  , 'kriteria_produk' => 'Disimpan pada suhu ruang (15°C - 30°C)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 19  , 'kriteria_produk' => 'Disimpan di dalam kulkas (4°C - 1,7°C)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
            ['id'=> 20  , 'kriteria_produk' => 'Disimpan di dalam freezer (sampai -17°C)', 'created_date' => date("Y-m-d H:i:s"),
                'updated_date' => date("Y-m-d H:i:s") ],
        ];

        $this->db->table('kriteria_produk')->insertBatch($data);
    }
}
