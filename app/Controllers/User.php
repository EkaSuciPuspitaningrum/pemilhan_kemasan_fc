<?php

namespace App\Controllers;

class User extends BaseController
{

    public function pencarian_kemasan()
    {
        return view('user/penentuan-kemasan');
    }

    public function riwayat_pencarian()
    {
        return view('user/riwayat');
    }
}
