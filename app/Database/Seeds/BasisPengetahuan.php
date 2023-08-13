<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BasisPengetahuan extends Seeder
{
    public function run()
    {
        $data = [
           //PET/PETE
          [ 'id'=> 1 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 1],
          [ 'id'=> 2 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 2], 
          [ 'id'=> 3 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 3], 
          [ 'id'=> 4 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 4], 
          [ 'id'=> 5 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 5], 
          [ 'id'=> 6 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 6], 
          [ 'id'=> 7 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 7], 
          [ 'id'=> 8 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 8], 
          [ 'id'=> 9 , 'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 10], 
          [ 'id'=> 10 ,  'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 12], 
          [ 'id'=> 11 ,  'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 14], 
          [ 'id'=> 12 ,  'jenis_kemasan_id' => 1, 'kriteria_produk_id' => 11], 
           //HDPE
          [ 'id'=> 13 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 1],
          [ 'id'=> 14 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 2], 
          [ 'id'=> 15 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 3], 
          [ 'id'=> 16 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 4], 
          [ 'id'=> 17 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 5], 
          [ 'id'=> 18 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 7], 
          [ 'id'=> 19 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 8], 
          [ 'id'=> 20 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 10], 
          
          [ 'id'=> 21 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 11], 
          [ 'id'=> 22 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 13], 
          [ 'id'=> 23 ,  'jenis_kemasan_id' => 2, 'kriteria_produk_id' => 14], 
           //PVC
          [ 'id'=> 24 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 1],
          [ 'id'=> 25 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 2], 
          [ 'id'=> 26 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 3],    
          [ 'id'=> 27 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 4], 
          [ 'id'=> 28 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 5], 
          [ 'id'=> 29 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 6], 
          [ 'id'=> 30 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 7], 
          [ 'id'=> 31 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 8], 
          [ 'id'=> 32 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 10], 
          [ 'id'=> 33 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 11], 
          [ 'id'=> 34 ,  'jenis_kemasan_id' => 3, 'kriteria_produk_id' => 13],   
           //LDPE
          [ 'id'=> 35 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 1],
          [ 'id'=> 36 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 2],   
          [ 'id'=> 37 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 3],    
          [ 'id'=> 38 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 4], 
          [ 'id'=> 39 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 5], 
          [ 'id'=> 40 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 6], 
          [ 'id'=> 41 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 7], 
          [ 'id'=> 42 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 8], 
          [ 'id'=> 43 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 10], 
          [ 'id'=> 44 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 11], 
          [ 'id'=> 45 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 13], 
          [ 'id'=> 46 ,  'jenis_kemasan_id' => 4, 'kriteria_produk_id' => 14], 
           //PP
          [ 'id'=> 47 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 1],
          [ 'id'=> 48 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 2],    
          [ 'id'=> 49 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 3],   
          [ 'id'=> 50 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 5], 
          [ 'id'=> 51 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 6], 
          [ 'id'=> 52 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 7], 
          [ 'id'=> 53 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 8], 
          [ 'id'=> 54 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 10], 
          [ 'id'=> 55 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 11], 
          [ 'id'=> 56 ,  'jenis_kemasan_id' => 5, 'kriteria_produk_id' => 14], 
           //PS
          [ 'id'=> 57 ,  'jenis_kemasan_id' => 6, 'kriteria_produk_id' => 1],
          [ 'id'=> 58 ,  'jenis_kemasan_id' => 6, 'kriteria_produk_id' => 2],   
          [ 'id'=> 59 ,  'jenis_kemasan_id' => 6, 'kriteria_produk_id' => 5], 
          [ 'id'=> 60 ,  'jenis_kemasan_id' => 6, 'kriteria_produk_id' => 6], 
          [ 'id'=> 61 ,  'jenis_kemasan_id' => 6, 'kriteria_produk_id' => 7], 
          [ 'id'=> 62 ,  'jenis_kemasan_id' => 6, 'kriteria_produk_id' => 8], 

           //NYLON
          [ 'id'=> 63 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 1],
          [ 'id'=> 64 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 2],   
          [ 'id'=> 65 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 3], 
          [ 'id'=> 66 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 4], 
          [ 'id'=> 67 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 5], 
          [ 'id'=> 68 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 6],  
          [ 'id'=> 69 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 9], 
          [ 'id'=> 70 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 10], 
          [ 'id'=> 71 ,  'jenis_kemasan_id' => 7, 'kriteria_produk_id' => 11], 
    ];
    
        // Using Query Builder
        $this->db->table('basis_pengetahuan')->insertBatch($data);
    }
}
