<?php

namespace App\Controllers;

use App\Models\WisataModel;

class Wisata extends BaseController
{
    protected $wisataModel;
    public function __construct()
    {
        $this->wisataModel = new WisataModel();
    }

    public function index(): string
    {
        $data = [
            'title' => 'Daftar Wisata',
            'allWisata' => $this->wisataModel->getWisata()
        ];
        return view('/admin/wisata/list', $data);
    }

    public function detail($id)
    {
        $wisata = $this->wisataModel->getWisata($id);
        $data = [
            'title' => 'Detail Wisata',
            'wisata' => $wisata
        ];
        if (empty($data['wisata'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Wisata id ' . $id . ' tidak ditemukan.');
        }
        return view('/admin/wisata/detail', $data);
    }

    public function add()
    {
        // d($_SESSION);
        $data = [
            'title' => 'Form Tambah Data Wisata',
        ];
        return view('/admin/wisata/add', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name' => [
                'rules' => 'required|is_unique[wisata.name]',
                'errors' => [
                    'required' => '{field} wisata harus diisi.',
                    'is_unique' => '{field} wisata sudah terdaftar.'
                ]
            ],
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image_url' => 'required',
            'location_url' => 'required',
        ])) {
            return redirect()->to('/admin/wisata/add')->withInput();
        }
        // dd('berhasil');
        $this->wisataModel->save([
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'image_url' => $this->request->getVar('image_url'),
            'location_url' => $this->request->getVar('location_url')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');

        return redirect()->to('/admin/wisata/');
    }

    public function delete($id)
    {
        $this->wisataModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/admin/wisata');
    }

    public function edit($id)
    {
        // d($_SESSION);
        $validation = session()->getFlashdata('validation');
        $data = [
            'title' => 'Form Ubah Data Wisata',
            'validation' => $validation,
            'wisata' => $this->wisataModel->getWisata($id)
        ];
        return view('/admin/wisata/edit', $data);
    }

    public function update($id)
    {
        $oldWisata = $this->wisataModel->getWisata($this->request->getVar('id'));
        if ($oldWisata['name'] == $this->request->getVar('name')) {
            $rule_name = 'required';
        } else {
            $rule_name = 'required|is_unique[wisata.name]';
        }
        if (!$this->validate([
            'name' => [
                'rules' => $rule_name,
                'errors' => [
                    'required' => '{field} wisata harus diisi.',
                    'is_unique' => '{field} wisata sudah terdaftar.'
                ]
            ],
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'image_url' => 'required',
            'location_url' => 'required',
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/admin/wisata/edit/' . $this->request->getVar('id'))->withInput();
        }

        $this->wisataModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'description' => $this->request->getVar('description'),
            'price' => $this->request->getVar('price'),
            'category' => $this->request->getVar('category'),
            'image_url' => $this->request->getVar('image_url'),
            'location_url' => $this->request->getVar('location_url')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah.');

        return redirect()->to('/admin/wisata');
    }
}
