<?php

namespace App\Controllers;

class Page extends BaseController
{
    protected $db;
    protected $wisataModel;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->wisataModel = new \App\Models\WisataModel();
    }
    public function index(): string
    {
        $featuredWisata = $this->wisataModel->getFeaturedWisata();
        $data = [
            'config' => config('Auth'),
            'featuredWisata' => $featuredWisata,
        ];
        return view('pages/home', $data);
    }
    public function wisata(): string
    {
        $allWisata = $this->wisataModel->getWisata();
        $data = [
            'config' => config('Auth'),
            'allWisata' => $allWisata,
        ];
        return view('pages/wisata', $data);
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
