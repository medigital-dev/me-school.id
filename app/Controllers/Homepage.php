<?php

namespace App\Controllers;

class Homepage extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'title' => 'meSchool - CMS Website Sekolah',
        ];

        return view('pages/homepage', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang - meSchool'
        ];

        return view('pages/about', $data);
    }

    public function privacy()
    {
        $data = [
            'title' => 'Privacy Policies - meSchool'
        ];

        return view('pages/privacy', $data);
    }

    public function tos()
    {
        $data = [
            'title' => 'Term of Service - meSchool'
        ];

        return view('pages/tos', $data);
    }

    public function docs()
    {
        $data = [
            'title' => 'User Guide - meSchool'
        ];

        return view('pages/docs', $data);
    }
}
