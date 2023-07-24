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
            $userModel = new Admin();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            
            $data = $userModel->where('email', $email)->first();
            
            if($data){
                $pass = $data['password'];
                $authenticatePassword = password_verify($password, $pass);
                if($authenticatePassword){
                    $ses_data = [
                        'id' => $data['id'],
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
                    $session->set($ses_data);
                    return redirect()->to('/dashboard_admin');
                
                }else{
                    $session->setFlashdata('msg', 'Password is incorrect.');
                    return redirect()->to('/login_admin');
                }
            }else{
                $session->setFlashdata('msg', 'Email does not exist.');
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
