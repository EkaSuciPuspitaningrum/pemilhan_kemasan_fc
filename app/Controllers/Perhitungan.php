<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BasisPengetahuan;
use App\Models\KriteriaProduk;

class Perhitungan extends BaseController
{
    public function index()
    {
        $kriteriaModel = new KriteriaProduk();
        $kriteria = $kriteriaModel->findAll(); // Mengambil data kriteria

        return view('penentuan_kemasan', ['kriteria' => $kriteria]);
    }


    

    public function pencarian()
{
    $selectedCriteria = $this->request->getVar('kriteria');

    if (!$selectedCriteria) {
        return redirect()->to('/pencarian_kemasan');
    }

    $basisModel = new BasisPengetahuan();
    $matchedRules = $basisModel->getMatchedRules($selectedCriteria);

    $result = null; // Store the selected packaging type
    foreach ($matchedRules as $rule) {
        $jenisKemasan = $basisModel->getJenisKemasanName($rule->jenis_kemasan_id);
        if ($jenisKemasan) {
            $result = $jenisKemasan;
            break; // Break the loop after the first matched rule
        }
    }

    return view('user/hasil-pencarian', ['result' => $result]);
}


    // public function pencarian()
    // {
    //     $selectedCriteria = $this->request->getVar('kriteria'); // Ambil data kriteria dari form

    //     if (!$selectedCriteria) {
    //         return redirect()->to('/pencarian_kemasan'); // Redirect kembali jika tidak ada kriteria terpilih
    //     }

    //     $basisModel = new BasisPengetahuan();
    //     $matchedRules = $basisModel->getMatchedRules($selectedCriteria);

    //     $result = []; // Simpan hasil perhitungan berdasarkan matched rules
    //     foreach ($matchedRules as $rule) {
    //         $jenisKemasan = $basisModel->getJenisKemasanName($rule->jenis_kemasan_id);
    //         if ($jenisKemasan) {
    //             $result[] = $jenisKemasan;
    //         }
    //     }

    //     // Tampilkan hasil perhitungan
    //     return view('user/hasil-pencarian', ['result' => $result]);
    // }

    // protected $pengetahuan;

    // function __construct()
    // {
    //     $this->pengetahuan = new BasisPengetahuan();
    // }

    // public function pencarian() {
    //     $selectedCriteria = $this->request->getPost('kriteria');
    //     $matchedRules = $this->pengetahuan->getMatchedRules($selectedCriteria);
    
    //     $bestMatch = null;
        
    //     foreach ($matchedRules as $rule) {
    //         $ruleCriteria = explode(',', $rule->kriteria_produk_id);
    //         $match = true;
    
    //         foreach ($selectedCriteria as $criteria) {
    //             if (!in_array($criteria, $ruleCriteria)) {
    //                 $match = false;
    //                 break;
    //             }
    //         }
    
    //         if ($match) {
    //             $bestMatch = $rule;
    //             break; 
    //         }
    //     }
    
    //     $jenisKemasanName = null;
        
    //     if ($bestMatch) {
    //         $jenisKemasanId = $bestMatch->jenis_kemasan_id;
    //         $jenisKemasanName = $this->pengetahuan->getJenisKemasanName($jenisKemasanId);
    //     }
    
    //     return view('user/hasil-pencarian', ['jenisKemasanName' => $jenisKemasanName]);
    // } 
      
}
