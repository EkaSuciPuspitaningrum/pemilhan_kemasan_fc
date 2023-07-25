<?php

namespace App\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;

class Admin extends BaseController
{  

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
        $rules = [
            'jenis_kemasan'          => 'required',
            'kriteria_kemasan'       => 'required',
        ];
        
          
        if($this->validate($rules)){
            $model = new JenisKemasan();
            $data = [
                'jenis_kemasan'     => $this->request->getVar('jenis_kemasan'),
                'kriteria_kemasan'    => $this->request->getVar('kriteria_kemasan'),
            ];
            $model->save($data);
            session()->setFlashdata('success', 'Data berhasil ditambah');
            return redirect()->to('/jenis_kemasan');
        }else{
            session()->setFlashdata('error', 'Data gagal ditambah');
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

    public function basis_pengetahuan()
    {
        $pengetahuan = new BasisPengetahuan();
        $data = $pengetahuan->findAll();
        return view('admin/basis_pengetahuan', [
            'data' => $data
        ]);
    }

    public function akun()
    {
        return view('admin/akun');
    }
}
