<?php

namespace App\Controllers;

class Admin extends BaseController
{  

    public function jenis_kemasan()
    {
        return view('admin/jenis_kemasan');
    }

    public function kriteria_kemasan()
    {
        return view('admin/kriteria_kemasan');
    }

    public function basis_pengetahuan()
    {
        return view('admin/basis_pengetahuan');
    }

    public function akun()
    {
        return view('admin/akun');
    }
}
