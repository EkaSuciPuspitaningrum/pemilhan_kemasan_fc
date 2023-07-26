<?php

namespace App\Controllers;

use App\Models\KriteriaProduk;

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
        return view('user/riwayat');
    }
}
