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

    //data jenis kemasan
    public function jenis_kemasan()
    {
        $kemasan = new JenisKemasan();
        $data = $kemasan->findAll();
        
        return view('pakar/jenis_kemasan', [
            'data' => $data
        ]);
    }

    //simpan data
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

    //hapus data
    public function jenis_kemasan_delete($id)
    {
        $kemasan = new JenisKemasan();
        $kemasan->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');
    }

    //edit data
    public function add_edit_data($id = null)
    {
        
        $kemasan = new JenisKemasan();
        $data = $kemasan->findAll();

        $data = [];

        if ($id !== null) {
            $kemasan = new JenisKemasan();
            $data = $kemasan->find($id);
        }
        if ($this->request->getMethod() === 'post') {
            $formData = $this->request->getPost();
            $validation = \Config\Services::validation();
            $validation->setRules([
                'jenis_kemasan' => 'required',
                'keterangan_kemasan' => 'required'
            ]);

            if ($validation->withRequest($this->request)->run()) {
                if ($id !== null) {
                    $kemasan->update($id, $formData);
                }
                else {
                    $kemasan->insert($formData);
                }
                return redirect()->to('/jenis_kemasan_pakar')->with('sukses', 'Data berhasil diubah.');
            } else {
                return view('pakar/jenis_kemasan', [
                    'data' => $formData,
                    'validation' => $validation
                ]);
            }
        }
        return view('pakar/jenis_kemasan', [
            'data' => $data,
            'dataa' => $dataa
        ]);
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

    public function akun()
    {
        return view('pakar/akun');
    }

}
