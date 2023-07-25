<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BasisPengetahuan extends Seeder
{
    public function run()
    {
        $data = [
           //PET/PETE
          [ 'id'=> 1 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 2 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Disimpan dalam suhu ruang'], 
          [ 'id'=> 3 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung air'], 
          [ 'id'=> 4 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
          [ 'id'=> 5 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 6 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
          [ 'id'=> 7 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
          [ 'id'=> 8 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
          [ 'id'=> 9 , 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
          [ 'id'=> 10 ,  'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Beraroma'], 
          [ 'id'=> 11 ,  'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan kimia'], 
          [ 'id'=> 12 ,  'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung asam'], 
           //HDPE
          [ 'id'=> 13 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 14 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Disimpan dalam suhu ruang'], 
          [ 'id'=> 15 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung air'], 
          [ 'id'=> 16 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
          [ 'id'=> 17 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 18 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
          [ 'id'=> 19 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
          [ 'id'=> 20 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
          
          [ 'id'=> 21 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung asam'], 
          [ 'id'=> 22 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Beralkohol'], 
          [ 'id'=> 23 ,  'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan kimia'], 
           //PVC
          [ 'id'=> 24 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 25 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Disimpan dalam suhu ruang'], 
          [ 'id'=> 26 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung air'],    
          [ 'id'=> 27 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
          [ 'id'=> 28 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 29 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
          [ 'id'=> 30 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
          [ 'id'=> 31 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
          [ 'id'=> 32 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
          [ 'id'=> 33 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung asam'], 
          [ 'id'=> 34 ,  'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Beralkohol'],   
           //LDPE
          [ 'id'=> 35 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 36 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],   
          [ 'id'=> 37 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung air'],    
          [ 'id'=> 38 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
          [ 'id'=> 39 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 40 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
          [ 'id'=> 41 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
          [ 'id'=> 42 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
          [ 'id'=> 43 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
          [ 'id'=> 44 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung asam'], 
          [ 'id'=> 45 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Beralkohol'], 
          [ 'id'=> 46 ,  'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan kimia'], 
           //PP
          [ 'id'=> 47 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 48 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],    
          [ 'id'=> 49 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung air'],   
          [ 'id'=> 50 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 51 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
          [ 'id'=> 52 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
          [ 'id'=> 53 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
          [ 'id'=> 54 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
          [ 'id'=> 55 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung asam'], 
          [ 'id'=> 56 ,  'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan kimia'], 
           //PS
          [ 'id'=> 57 ,  'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 58 ,  'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],   
          [ 'id'=> 59 ,  'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 60 ,  'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
          [ 'id'=> 61 ,  'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
          [ 'id'=> 62 ,  'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 

           //NYLON
          [ 'id'=> 63 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
          [ 'id'=> 64 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],   
          [ 'id'=> 65 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung air'], 
          [ 'id'=> 66 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
          [ 'id'=> 67 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
          [ 'id'=> 68 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'],  
          [ 'id'=> 69 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Bersifat tajam atau berduri'], 
          [ 'id'=> 70 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
          [ 'id'=> 71 ,  'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung asam'], 
    ];

//     $data = [
//         //PET/PETE
//        [ 'id'=> 1 , 'id_pengetahuan'=> "BPK-1", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 2 , 'id_pengetahuan'=> "BPK-2", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Disimpan dalam suhu ruang'], 
//        [ 'id'=> 3 , 'id_pengetahuan'=> "BPK-3", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung air'], 
//        [ 'id'=> 4 , 'id_pengetahuan'=> "BPK-4", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
//        [ 'id'=> 5 , 'id_pengetahuan'=> "BPK-5", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 6 , 'id_pengetahuan'=> "BPK-6", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
//        [ 'id'=> 7 , 'id_pengetahuan'=> "BPK-7", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
//        [ 'id'=> 8 , 'id_pengetahuan'=> "BPK-8", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
//        [ 'id'=> 9 , 'id_pengetahuan'=> "BPK-9", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
//        [ 'id'=> 10 , 'id_pengetahuan'=> "BPK-10", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Beraroma'], 
//        [ 'id'=> 11 , 'id_pengetahuan'=> "BPK-11", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung bahan kimia'], 
//        [ 'id'=> 12 , 'id_pengetahuan'=> "BPK-12", 'jenis_kemasan' => 'Plastik PET/PETE', 'kriteria_produk' => 'Mengandung asam'], 
//         //HDPE
//        [ 'id'=> 13 , 'id_pengetahuan'=> "BPK-13", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 14 , 'id_pengetahuan'=> "BPK-14", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Disimpan dalam suhu ruang'], 
//        [ 'id'=> 15 , 'id_pengetahuan'=> "BPK-15", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung air'], 
//        [ 'id'=> 16 , 'id_pengetahuan'=> "BPK-16", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
//        [ 'id'=> 17 , 'id_pengetahuan'=> "BPK-17", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 18 , 'id_pengetahuan'=> "BPK-18", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
//        [ 'id'=> 19 , 'id_pengetahuan'=> "BPK-19", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
//        [ 'id'=> 20 , 'id_pengetahuan'=> "BPK-20", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
       
//        [ 'id'=> 21 , 'id_pengetahuan'=> "BPK-21", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung asam'], 
//        [ 'id'=> 22 , 'id_pengetahuan'=> "BPK-22", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Beralkohol'], 
//        [ 'id'=> 23 , 'id_pengetahuan'=> "BPK-23", 'jenis_kemasan' => 'Plastik HDPE', 'kriteria_produk' => 'Mengandung bahan kimia'], 
//         //PVC
//        [ 'id'=> 24 , 'id_pengetahuan'=> "BPK-24", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 25 , 'id_pengetahuan'=> "BPK-25", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Disimpan dalam suhu ruang'], 
//        [ 'id'=> 26 , 'id_pengetahuan'=> "BPK-26", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung air'],    
//        [ 'id'=> 27 , 'id_pengetahuan'=> "BPK-27", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
//        [ 'id'=> 28 , 'id_pengetahuan'=> "BPK-28", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 29 , 'id_pengetahuan'=> "BPK-29", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
//        [ 'id'=> 30 , 'id_pengetahuan'=> "BPK-30", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
//        [ 'id'=> 31 , 'id_pengetahuan'=> "BPK-31", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
//        [ 'id'=> 32 , 'id_pengetahuan'=> "BPK-32", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
//        [ 'id'=> 33 , 'id_pengetahuan'=> "BPK-33", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Mengandung asam'], 
//        [ 'id'=> 34 , 'id_pengetahuan'=> "BPK-34", 'jenis_kemasan' => 'Plastik PVC', 'kriteria_produk' => 'Beralkohol'],   
//         //LDPE
//        [ 'id'=> 35 , 'id_pengetahuan'=> "BPK-35", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 36 , 'id_pengetahuan'=> "BPK-36", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],   
//        [ 'id'=> 37 , 'id_pengetahuan'=> "BPK-37", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung air'],    
//        [ 'id'=> 38 , 'id_pengetahuan'=> "BPK-38", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
//        [ 'id'=> 39 , 'id_pengetahuan'=> "BPK-39", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 40 , 'id_pengetahuan'=> "BPK-40", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
//        [ 'id'=> 41 , 'id_pengetahuan'=> "BPK-41", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
//        [ 'id'=> 42 , 'id_pengetahuan'=> "BPK-42", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
//        [ 'id'=> 43 , 'id_pengetahuan'=> "BPK-43", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
//        [ 'id'=> 44 , 'id_pengetahuan'=> "BPK-44", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung asam'], 
//        [ 'id'=> 45 , 'id_pengetahuan'=> "BPK-45", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Beralkohol'], 
//        [ 'id'=> 46 , 'id_pengetahuan'=> "BPK-46", 'jenis_kemasan' => 'Plastik LDPE', 'kriteria_produk' => 'Mengandung bahan kimia'], 
//         //PP
//        [ 'id'=> 47 , 'id_pengetahuan'=> "BPK-47", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 48 , 'id_pengetahuan'=> "BPK-48", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],    
//        [ 'id'=> 49 , 'id_pengetahuan'=> "BPK-49", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung air'],   
//        [ 'id'=> 50 , 'id_pengetahuan'=> "BPK-50", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 51 , 'id_pengetahuan'=> "BPK-51", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
//        [ 'id'=> 52 , 'id_pengetahuan'=> "BPK-52", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
//        [ 'id'=> 53 , 'id_pengetahuan'=> "BPK-53", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 
//        [ 'id'=> 54 , 'id_pengetahuan'=> "BPK-54", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
//        [ 'id'=> 55 , 'id_pengetahuan'=> "BPK-55", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung asam'], 
//        [ 'id'=> 56 , 'id_pengetahuan'=> "BPK-56", 'jenis_kemasan' => 'Plastik PP', 'kriteria_produk' => 'Mengandung bahan kimia'], 
//         //PS
//        [ 'id'=> 57 , 'id_pengetahuan'=> "BPK-57", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 58 , 'id_pengetahuan'=> "BPK-58", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],   
//        [ 'id'=> 59 , 'id_pengetahuan'=> "BPK-59", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 60 , 'id_pengetahuan'=> "BPK-60", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'], 
//        [ 'id'=> 61 , 'id_pengetahuan'=> "BPK-61", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Mengandung bahan pengawet buatan'], 
//        [ 'id'=> 62 , 'id_pengetahuan'=> "BPK-62", 'jenis_kemasan' => 'Plastik PS', 'kriteria_produk' => 'Mengandung bahan pewarna buatan'], 

//         //NYLON
//        [ 'id'=> 63 , 'id_pengetahuan'=> "BPK-63", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Dapat disimpan dalam suhu rendah atau dingin'],
//        [ 'id'=> 64 , 'id_pengetahuan'=> "BPK-64", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Disimpan dalam suhu ruang'],   
//        [ 'id'=> 65 , 'id_pengetahuan'=> "BPK-65", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung air'], 
//        [ 'id'=> 66 , 'id_pengetahuan'=> "BPK-66", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang rendah terhadap air'], 
//        [ 'id'=> 67 , 'id_pengetahuan'=> "BPK-67", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap gas'], 
//        [ 'id'=> 68 , 'id_pengetahuan'=> "BPK-68", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Memiliki permeabilitas yang tinggi terhadap uap'],  
//        [ 'id'=> 69 , 'id_pengetahuan'=> "BPK-69", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Bersifat tajam atau berduri'], 
//        [ 'id'=> 70 , 'id_pengetahuan'=> "BPK-70", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung lemak/minyak'], 
//        [ 'id'=> 71 , 'id_pengetahuan'=> "BPK-71", 'jenis_kemasan' => 'Plastik NYLON', 'kriteria_produk' => 'Mengandung asam'], 
//  ];
        // Using Query Builder
        $this->db->table('basis_pengetahuan')->insertBatch($data);
    }
}
