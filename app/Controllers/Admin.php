<?php

namespace App\Controllers;

use App\Models\Admin as ModelsAdmin;
use App\Models\BasisPengetahuan;
use App\Models\CalonPakar;
use App\Models\JenisKemasan;
use App\Models\KriteriaProduk;
use App\Models\Pakar;

class Admin extends BaseController
{  
    protected $jeniskemasan;
    protected $kriteriaproduk;
    protected $pengetahuan;
    protected $dataadmin;

 
    function __construct()
    {
        $this->jeniskemasan = new JenisKemasan();
        $this->kriteriaproduk = new KriteriaProduk();
        $this->pengetahuan = new BasisPengetahuan();
        $this->dataadmin = new ModelsAdmin();

    }
    

    public function dashboard_admin()
    {
        return view('admin/home');
    }

    //data jenis kemasan
    public function jenis_kemasan_admin()
    {
        $kemasan = new JenisKemasan();
        $dataa = $kemasan->findAll();
        
        return view('admin/jenis_kemasan', [
            'dataa' => $dataa,
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
            return redirect()->to('/jenis_kemasan_admin');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/jenis_kemasan_admin');
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


    //data kriteria
    public function kriteria_produk()
    {
        
        $kriteriaa = new KriteriaProduk();
        $kriteria = $kriteriaa->findAll();
        return view('admin/kriteria_produk', [
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
            return redirect()->to('/kriteria_produk');
        }else{
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/kriteria_produk');
        }
    }

    //edit kriteria
    public function edit_kriteria($id = null)
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
                return redirect()->to('/kriteria_produk')->with('sukses', 'Data berhasil diubah.');
            } else {
                return view('admin/kriteria_produk', [
                    'data' => $formData,
                    'validation' => $validation
                ]);
            }
        }
        return view('admin/kriteria_produk', [
            'data' => $data,
            'kriteria' => $kriteria
        ]);
    }

    //hapus data kriteria
    public function kriteria_delete($id)
    {
        $kriteriaa = new KriteriaProduk();
        $kriteriaa->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }

    //data admin
    public function data_admin()
    {
        $dataadmin = new ModelsAdmin();
        $dataa = $dataadmin->findAll();

        return view('admin/data-admin', [
            'dataa' => $dataa
        ]);
    }

    //simpan data admin
    public function data_admin_create()
    {
        $session = session();
    
        // Validate form input
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ];
    
        if ($this->validate($rules)) {
            $formData = $this->request->getPost();
    
            // Hash the password
            $hashedPassword = password_hash($formData['password'], PASSWORD_DEFAULT);
    
            // Prepare data for insertion
            $data = [
                'name' => $formData['name'],
                'email' => $formData['email'],
                'password' => $formData['password'],
                'password_hash' => $hashedPassword
            ];
    
            // Insert data into the database
            $this->dataadmin->insert($data);
    
            $session->setFlashdata('sukses', 'Data berhasil ditambah.');
            return redirect()->to('/data_admin');
        } else {
            $session->setFlashdata('gagal', 'Data gagal ditambah.');
            return redirect()->to('/data_admin');
        }
    }
    

    //hapus data admin
    public function data_admin_delete($id)
    {
        $dataadmin = new ModelsAdmin();
        $dataadmin->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }

    //edit data admin
    public function add_edit_data_admin($id = null)
    {
        $dataadmin = new ModelsAdmin();
        $dataa = $dataadmin->findAll();

        $data = [];

        if ($id !== null) {
            $dataadmin = new ModelsAdmin();
            $data = $dataadmin->find($id);
        }
        if ($this->request->getMethod() === 'post') {
            $formData = $this->request->getPost();
            $validation = \Config\Services::validation();
            $validation->setRules([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'

            ]);

            if ($validation->withRequest($this->request)->run()) {
                if ($id !== null) {
                    $dataadmin->update($id, $formData);
                }
                else {
                    $dataadmin->insert($formData);
                }
                return redirect()->to('/data_admin')->with('sukses', 'Data berhasil diubah.');
            } else {
                return view('admin/data-admin', [
                    'data' => $formData,
                    'validation' => $validation
                ]);
            }
        }
        return view('admin/data-admin', [
            'data' => $data,
            'dataa' => $dataa
        ]);
    }

    public function data_pakar()
    {
        $datapakar = new Pakar();
        $data_pakar = $datapakar->findAll();
        $datacalonpakar = new CalonPakar();
        $data_calon = $datacalonpakar->findAll();

        return view('admin/data-pakar', [
            'data_pakar' => $data_pakar,
            'data_calon' => $data_calon
        ]);
    }

    // public function data_calon_pakar()
    // {
    //     $datacalonpakar = new CalonPakar();
    //     $data_calon = $datacalonpakar->findAll();

    //     return view('admin/data-calon-pakar', [
    //         'data_calon' => $data_calon
    //     ]);
    // }

    public function data_pakar_create()
   {
       $model = new Pakar();

       if ($this->request->getMethod() === 'post') {
           $formData = $this->request->getPost();
           // You can add validation here before inserting data
           
           // Hash the password
            $hashedPassword = password_hash($formData['password'], PASSWORD_DEFAULT);
            $formData['password_hash'] = $hashedPassword;

           // Handle file upload
           $file = $this->request->getFile('dokumen');
           $fileName = $file->getRandomName();
           $file->move(ROOTPATH . 'public/uploads', $fileName);

           // Add file name to form data
           $formData['dokumen'] = $fileName;

           // Insert data into the database
           $model->insert($formData);

           return redirect()->back()->with('sukses', 'Data berhasil ditambah.');
       }

       return view('admin/data-pakar'); 
   }

   public function add_edit_data_pakar($id = null)
   {
       $dataapakar = new Pakar();
       $data_pakar = $dataapakar->findAll();
          
       $datacalonpakar = new CalonPakar();
       $data_calon = $datacalonpakar->findAll();
      
       if ($id !== null) {
           $datapakar = new Pakar();
           $data = $datapakar->find($id); 
       }
      
       if ($this->request->getMethod() === 'post') {
           $formData = $this->request->getPost();
           $file = $this->request->getFile('dokumen');
      
           if ($file->isValid() && !$file->hasMoved()) {
               $newFileName = $file->getRandomName();
               $file->move(ROOTPATH . 'public/uploads', $newFileName);
               $formData['dokumen'] = $newFileName;
           } else {
               $formData['dokumen'] = $data->dokumen ?? ''; 
           }
   
           // Hash the password before saving
           $formData['password_hash'] = password_hash($formData['password'], PASSWORD_DEFAULT);
      
           $validation = \Config\Services::validation();
           $validation->setRules([
               'first_name' => 'required',
               'last_name' => 'required',
               'email' => 'required',
               'password' => 'required',
               'pendidikan' => 'required',
               'instansi' => 'required',
               'dokumen' => 'required',
           ]);
      
           if ($validation->withRequest($this->request)->run()) {
               if ($id !== null) {
                   $datapakar->update($id, $formData);
               } else {
                   $datapakar->insert($formData);
               }
               return redirect()->to('/data_pakar')->with('sukses', 'Data berhasil diubah.');
           } else {
               return view('admin/data-pakar', [
                   'data' => $formData,
                   'validation' => $validation,
                   'data_pakar' => $data_pakar,
                   'data_calon' => $data_calon
               ]);
           }
       }
      
       return view('admin/data-pakar', [
           'data' => $data,
           'data_pakar' => $data_pakar,
           'data_calon' => $data_calon
       ]);
   }

   public function show_data($id = null)
   {
  
       $datacalonpakar = new CalonPakar();
       $data_calon = $datacalonpakar->find($id); 

       return view('admin/show-data-calon', [
           'data_calon' => $data_calon
       ]);
   }
   
   

   public function transfer_data($id)
   {
       // Initialize models
       $calonPakarModel = new CalonPakar();
       $pakarModel = new Pakar();
   
       // Get the data from CalonPakar
       $calonPakarData = $calonPakarModel->find($id);
   
       if ($calonPakarData) {
           // Create data for Pakar
           $pakarData = [
               'first_name' => $calonPakarData->first_name, // Change to arrow notation
               'last_name' => $calonPakarData->last_name, // Change to arrow notation
               'email' => $calonPakarData->email, // Change to arrow notation
               'password' => $calonPakarData->password, // Change to arrow notation
               'password_hash' => password_hash($calonPakarData->password, PASSWORD_DEFAULT), // Hash the password
               'pendidikan' => $calonPakarData->pendidikan, // Change to arrow notation
               'instansi' => $calonPakarData->instansi, // Change to arrow notation
           ];
   
           // Move the file
           $sourcePath = 'public/uploads/' . $calonPakarData->dokumen;
            if (file_exists($sourcePath)) {
                $destinationPath = 'public/uploads/' . $calonPakarData->dokumen;
                copy($sourcePath, $destinationPath);
                // Rest of the code
            } else {
                // Handle error or debug the path
                echo "Source file not found: $sourcePath";
            }

           // Assign the file name to the Pakar data
           $pakarData['dokumen'] = $calonPakarData->dokumen; // Change to arrow notation
   
           // Insert data into Pakar table
           $pakarModel->insert($pakarData);
   
           // Delete the data from CalonPakar table
           $calonPakarModel->delete($id);
   
           // Redirect with a success message
           return redirect()->to('/data_pakar')->with('sukses', 'Data berhasil mendapat approve.');
       } else {
           // Redirect with an error message
           return redirect()->to('/data_pakar')->with('msg', 'Data tidak ditemukan.');
       }
   }
   




   
    public function data_calon_pakar_hapus($id)
    {
        $data = new CalonPakar();
        $data->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }

    public function data_pakar_delete($id)
    {
        $data = new Pakar();
        $data->delete($id);
        
        return redirect()->back()->with('sukses', 'Data berhasil dihapus.');

    }

    //logout
    public function logout() 
    {
        session()->destroy();
        return redirect()->to(base_url('/'));
    }


    
}
