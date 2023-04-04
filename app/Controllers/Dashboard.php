<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
    {
        if (!session()->get('meschool_user-session')) {
            redirect()->to('auth');
        }
    }

    public function index()
    {

        print_r(session()->get('meschool_user-session'));
        session()->destroy();

        // $data = [
        //     'pageTitle' => 'Dashboard - meSchool.net',
        //     'sidebar' => 'home'
        // ];

        // return view('dashboard/home', $data);
    }

    private function auth()
    {
        return redirect()->to(base_url('auth'));
    }
}
