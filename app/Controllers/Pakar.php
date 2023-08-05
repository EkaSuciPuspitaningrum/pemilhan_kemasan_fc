<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;

class Pakar extends BaseController
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

    public function dashboard_pakar()
    {
        return view('pakar/home');
    }

    public function jenis_kemasan()
    {
        $kemasan = new JenisKemasan();
        $data = $kemasan->findAll();
        
        return view('pakar/jenis_kemasan', [
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
            return redirect()->to('/jenis_kemasan_pakar');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/jenis_kemasan_pakar');
        }
    }

    public function jenis_kemasan_delete($id)
    {
        $kemasan = new JenisKemasan();
        $kemasan->delete($id);
        
        return view('pakar/jenis_kemasan', [
        ]);
    }

    public function jenis_kemasan_edit($id)
    {
        
        $this->jeniskemasan->update($id, [
            'id' => $this->request->getPost('id'),
            'jenis_kemasan' => $this->request->getPost('jenis_kemasan'),
            'keterangan_kemasan' => $this->request->getPost('keterangan_kemasan'),
            'created_date' => $this->request->getPost('created_date'),
            'updated_date' => $this->request->getPost('updated_date'),
            ]);

            return redirect('pakar/jenis_kemasan')->with('success', 'Data Updated Successfully');
    }

    public function kriteria_produk()
    {
        
        $kriteriaa = new KriteriaProduk();
        $kriteria = $kriteriaa->findAll();
        return view('pakar/kriteria_produk', [
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
            return redirect()->to('/kriteria_produk_pakar');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/kriteria_produk_pakar');
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
        return view('pakar/basis_pengetahuan', [
            'data' => $data,
            'kemasan' => $kemasan,
            'kriteria' => $kriteria,
            
        ]);
    }

}
