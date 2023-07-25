<?php

namespace App\Controllers;

use App\Models\Admin;

class Auth extends BaseController
{  
    public function login_admin()
    {
        return view('auth/login');
    }

    public function aksi_login() 
   {

            $session = session();
            $model = new Admin();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $data = $model->where('email', $email)->first();
            if($data){
                $pass = $data['password_hash'];
                $verify_pass = password_verify($password, $pass);
                if($verify_pass){
                    $ses_data = [
                        'id'       => $data['id'],
                        'name'     => $data['name'],
                        'email'    => $data['email'],
                        'logged_in'     => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/dashboard_admin');
                }else{
                    $session->setFlashdata('msg', 'Wrong Password');
                    return redirect()->to('/login_admin');
                }
            }else{
                $session->setFlashdata('msg', 'Email not Found');
                return redirect()->to('/login_admin');
            }
        }
        // dd($email, $password);
   
   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('/'));
   }

}
