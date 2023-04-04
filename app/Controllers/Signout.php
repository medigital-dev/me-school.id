<?php

namespace App\Controllers;

class Signout extends BaseController
{
    public function index()
    {
        session()->destroy();
        return redirect()->to(base_url('auth'));
    }
}
