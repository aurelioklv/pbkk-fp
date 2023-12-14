<?php

namespace App\Models;

use CodeIgniter\Model;

class WisataModel extends Model
{
    protected $table = 'wisata';
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'description', 'price', 'image_url', 'location_url'];

    public function getWisata($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
