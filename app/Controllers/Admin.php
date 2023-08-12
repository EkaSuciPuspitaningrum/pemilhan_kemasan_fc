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

    public function jenis_kemasan_admin()
    {
        $kemasan = new JenisKemasan();
        $dataa = $kemasan->findAll();
        
        return view('admin/jenis_kemasan', [
            'dataa' => $dataa,
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
            return redirect()->to('/jenis_kemasan_admin');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/jenis_kemasan_admin');
        }
    }

    public function jenis_kemasan_delete($id)
    {
        $kemasan = new JenisKemasan();
        $kemasan->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }

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
            return redirect()->to('/jenis_kemasan_admin')->with('sukses', 'Data berhasil diubah.');
        } else {
            return view('admin/jenis_kemasan', [
                'data' => $formData,
                'validation' => $validation
            ]);
        }
    }
    return view('admin/jenis_kemasan', [
        'data' => $data,
        'dataa' => $dataa
    ]);
}


    public function jenis_kemasan_update($id)
    {
        $kemasan = new JenisKemasan();

        $data = [
            'jenis_kemasan' => $this->request->getPost('jenis_kemasan'),
            'keterangan_kemasan' => $this->request->getPost('keterangan_kemasan')
            // ... other fields
        ];

        // Validate data
        if ($kemasan->validate($data)) {
            $kemasan->update($id, $data);
            return redirect()->to('admin/jenis_kemasan')->with('success', 'Product updated successfully');
        } else {
            return redirect()->back()->withInput()->with('errors', $kemasan->errors());
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
