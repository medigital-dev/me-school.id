<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        if (!$this->cekUserSession()) {
            return redirect()->to(base_url('auth'));
        }

        session()->destroy();
    }

    private function cekUserSession()
    {
        return session()->get('meschool_user-session');
    }
}
