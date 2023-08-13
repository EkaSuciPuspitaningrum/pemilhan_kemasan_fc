<?php

namespace App\Controllers;

use App\Models\KriteriaProduk;
use App\Models\RiwayatPencarian;

class User extends BaseController
{
    protected $kriteriaproduk;

 
    function __construct()
    {
        $this->kriteriaproduk = new KriteriaProduk();

    }

    public function pencarian_kemasan()
    {
        $kriteriaproduk = new KriteriaProduk();
        $kriteria = $kriteriaproduk->findAll();
        return view('user/penentuan-kemasan', [
            'kriteria' => $kriteria,
            
        ]);
    }

    public function riwayat_pencarian()
    {
        $riwayat = new RiwayatPencarian();
        $data = $riwayat->findAll();
        return view('user/riwayat', [
            'dataa' => $data,
            
        ]);
    }
}
