<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PaketWisataWisataSeeder extends Seeder
{
    public function run()
    {
        $relations = [
            1 => [1, 2, 3],
            2 => [1, 4, 5],
            3 => [2, 4],
            4 => [3, 5],
            5 => [1, 2, 3, 4, 5],
        ];
        $data = [];
        foreach ($relations as $paketWisataId => $wisataIds) {
            foreach ($wisataIds as $wisataId) {
                $data[] = [
                    'paket_wisata_id' => $paketWisataId,
                    'wisata_id' => $wisataId,
                    'created_at' => Time::now(),
                    'updated_at' => Time::now(),
                ];
            }
        }
        $this->db->table('paket_wisata_wisata')->insertBatch($data);
    }
}
