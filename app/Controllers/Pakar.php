<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataPakar;
use App\Models\BasisPengetahuan;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;

class Pakar extends BaseController
{
    protected $jeniskemasan;
    protected $kriteriaproduk;
    protected $pengetahuan;
    protected $datapakar;

 
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
            'dataa' => $data
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
        $dataa = $kemasan->findAll();

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


    //data kriteria
    public function kriteria_produk()
    {
        
        $kriteriaa = new KriteriaProduk();
        $kriteria = $kriteriaa->findAll();
        return view('pakar/kriteria_produk', [
            'kriteria' => $kriteria
        ]);
    }

    //simpan data kriteria
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

    //edit kriteria
    public function edit_data_kriteria($id = null)
    {
        $kriteriaa = new KriteriaProduk();
        $kriteria = $kriteriaa->findAll();


        $data = [];

        if ($id !== null) {
            $kriteriaa = new KriteriaProduk();
            $data = $kriteriaa->find($id);
        }
        if ($this->request->getMethod() === 'post') {
            $formData = $this->request->getPost();
            $validation = \Config\Services::validation();
            $validation->setRules([
                'kriteria_produk'       => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                if ($id !== null) {
                    $kriteriaa->update($id, $formData);
                }
                else {
                    $kriteriaa->insert($formData);
                }
                return redirect()->to('/kriteria_produk_pakar')->with('sukses', 'Data berhasil diubah.');
            } else {
                return view('pakar/kriteria_produk', [
                    'data' => $formData,
                    'validation' => $validation
                ]);
            }
        }
        return view('pakar/kriteria_produk', [
            'data' => $data,
            'kriteria' => $kriteria
        ]);
    }

    //hapus data kriteria
    public function kriteria_produk_delete($id)
    {
        $kriteriaa = new KriteriaProduk();
        $kriteriaa->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }


    //basis pengetahuan
    public function basis_pengetahuan()
    {
        $jeniskemasanModel = new JenisKemasan();
        $kemasan = $jeniskemasanModel->findAll();
    
        $kriteriaprodukModel = new KriteriaProduk();
        $kriteria = $kriteriaprodukModel->findAll();
    
        $pengetahuanModel = new BasisPengetahuan();
        $data = $pengetahuanModel->findAll();
    
        return view('pakar/basis_pengetahuan', [
            'data' => $data,
            'kemasan' => $kemasan,
            'kriteria' => $kriteria,
            'jeniskemasanModel' => $jeniskemasanModel,
            'kriteriaprodukModel' => $kriteriaprodukModel,
        ]);
    }
    

    //simpan data basis pengetahuan
    public function basis_pengetahuan_create()
    {
        $session = session();

        $rules = [
            'jenis_kemasan_id'             => 'required',
            'kriteria_produk_id'        => 'required',
        ];

        
        if($this->validate($rules)){
            $jenisKemasanId = $this->request->getPost('jenis_kemasan_id');
            $kriteriaProdukId = $this->request->getPost('kriteria_produk_id');
            
            $pengetahuanModel = new BasisPengetahuan();
        
            // Assuming you have a model function like "insertData"
            $pengetahuanModel->insertData($jenisKemasanId, $kriteriaProdukId);
            
            $session->setFlashdata('sukses', 'Data berhasil ditambah.');
            return redirect()->to('/basis_pengetahuan_pakar');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/basis_pengetahuan_pakar');
        }
    }

    //edit basis pengetahuan
    public function edit_pengetahuan($id = null)
    {
        $jeniskemasanModel = new JenisKemasan();
        $kemasan = $jeniskemasanModel->findAll();
       
        $kriteriaprodukModel = new KriteriaProduk();
        $kriteria = $kriteriaprodukModel->findAll();
        
        $pengetahuan = new BasisPengetahuan();
        $data = $pengetahuan->findAll();

        $pengetahuanModel = new BasisPengetahuan();
        $dataa = (object)[];

        if ($id !== null) {
            $dataa = $pengetahuanModel->find($id);
        }

        if ($this->request->getMethod() === 'post') {
            $formData = $this->request->getPost();
            $validation = \Config\Services::validation();
            $validation->setRules([
                'jenis_kemasan_id' => 'required',
                'kriteria_produk_id' => 'required',
            ]);
    
            if ($validation->withRequest($this->request)->run()) {
                if ($id !== null) {
                    $pengetahuanModel->update($id, $formData);
                } else {
                    $pengetahuanModel->insert($formData);
                }
                return redirect()->to('/basis_pengetahuan_pakar')->with('sukses', 'Data berhasil diubah.');
            } else {
                return view('pakar/basis_pengetahuan', [
                    'dataa' => $dataa,
                    'kemasan' => $kemasan,
                    'kriteria' => $kriteria,
                    'validation' => $validation,
                    'jeniskemasanModel' => $jeniskemasanModel,
                    'kriteriaprodukModel' => $kriteriaprodukModel,
                ]);
            }
        }
    
        return view('pakar/basis_pengetahuan', [
            'dataa' => $dataa,
            'data' => $data,
            'kemasan' => $kemasan,
            'kriteria' => $kriteria,
            'jeniskemasanModel' => $jeniskemasanModel,
            'kriteriaprodukModel' => $kriteriaprodukModel,
        ]);
    }    

    //hapus data basis pengetahuan
    public function basis_pengetahuan_delete($id)
    {
        $pengetahuan = new BasisPengetahuan();
        $pengetahuan->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }



}
