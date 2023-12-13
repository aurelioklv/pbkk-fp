<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('pages/home', $data);
    }
    public function wisata(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('pages/wisata', $data);
    }
    public function paket(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('pages/paket', $data);
    }
    public function kategori(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('pages/kategori', $data);
    }
    public function user(): string
    {
        $data = [
            'config' => config('Auth'),
        ];
        return view('pages/user', $data);
    }
}
