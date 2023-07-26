<?php

namespace App\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;

class Admin extends BaseController
{  
    protected $jeniskemasan;
    protected $kriteriaproduk;
    protected $pengetahuan;

 
    function __construct()
    {
        $this->jeniskemasan = new JenisKemasan();
        $this->kriteriaproduk = new KriteriaProduk();
        $this->pengetahuan = new BasisPengetahuan();

    }

    public function dashboard_admin()
    {
        return view('admin/home');
    }

    public function jenis_kemasan()
    {
        $kemasan = new JenisKemasan();
        $data = $kemasan->findAll();
        
        return view('admin/jenis_kemasan', [
            'data' => $data
        ]);
    }

    public function jenis_kemasan_create()
    {
        $session = session();

        $rules = [
            'jenis_kemasan'          => 'required',
            'keterangan_kemasan'       => 'required',
        ];
        
          
        if($this->validate($rules)){
            $this->jeniskemasan->insert([
                'jenis_kemasan'     => $this->request->getPost('jenis_kemasan'),
                'keterangan_kemasan'    => $this->request->getPost('keterangan_kemasan')
            ]);
            
            $session->setFlashdata('sukses', 'Data berhasil ditambah.');
            return redirect()->to('/jenis_kemasan');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/jenis_kemasan');
        }
    }

    public function kriteria_produk()
    {
        
        $kriteriaa = new KriteriaProduk();
        $kriteria = $kriteriaa->findAll();
        return view('admin/kriteria_produk', [
            'kriteria' => $kriteria
        ]);
    }

    public function kriteria_produk_create()
    {
        $session = session();

        $rules = [
            'kriteria_produk'       => 'required',
        ];
        
          
        if($this->validate($rules)){
            $this->kriteriaproduk->insert([
                'kriteria_produk'    => $this->request->getPost('kriteria_produk')
            ]);
            
            $session->setFlashdata('sukses', 'Data berhasil ditambah.');
            return redirect()->to('/kriteria_produk');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/kriteria_produk');
        }
    }


    public function basis_pengetahuan()
    {
        $jeniskemasan = new JenisKemasan();
        $kemasan = $jeniskemasan->findAll();
       
        $kriteriaproduk = new KriteriaProduk();
        $kriteria = $kriteriaproduk->findAll();
        
        $pengetahuan = new BasisPengetahuan();
        $data = $pengetahuan->findAll();
        return view('admin/basis_pengetahuan', [
            'data' => $data,
            'kemasan' => $kemasan,
            'kriteria' => $kriteria,
            
        ]);
    }

    public function akun()
    {
        return view('admin/akun');
    }
}
