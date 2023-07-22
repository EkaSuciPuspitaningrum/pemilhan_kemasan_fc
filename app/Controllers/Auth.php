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
        $users = new Admin();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'email' => $dataUser->email,
                    'name' => $dataUser->name,
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('home'));
            } else {
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/login_admin');
            }
        } else {
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('/login_admin');
        }
        // dd($email, $password);
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('/'));
   }

}
