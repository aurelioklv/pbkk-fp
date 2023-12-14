<?php

namespace App\Controllers;

class Admin extends BaseController
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
        $data = [
            'title' => 'Users',
        ];

        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, auth_groups.name as role');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $query = $builder->get();

        $data['users'] = $query->getResult();

        return view('admin/user/list', $data);
    }

    public function user($id = 0)
    {
        $data = [
            'title' => 'User Detail',
        ];

        $builder = $this->db->table('users');
        $builder->select('users.id as userid, username, email, fullname, profile_picture, auth_groups.name as role');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('users.id', $id);
        $query = $builder->get();

        $data['user'] = $query->getRow();

        if (empty($data['user'])) {
            return redirect()->to('/admin');
        }

        return view('admin/user/detail', $data);
    }

    public function wisata(): string
    {
        $data = [
            'title' => 'Wisata',
            'books' => $this->wisataModel->getWisata()
        ];
        return view('admin/wisata-list', $data);
    }

    public function transaction(): string
    {
        $data = [
            'title' => 'Transaction'
        ];
        return view('admin/transaction', $data);
    }
}
