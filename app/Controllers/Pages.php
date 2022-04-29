<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Socmed'
        ];
        return view('post/index', $data);
        echo view('layouts/footer');
    }

    public function profile()
    {
        $data = [
            'title' => 'Profile | Socmed'
        ];
        return view('pages/profile', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Socmed'
        ];
        return view('auth/login', $data);
    }
}
