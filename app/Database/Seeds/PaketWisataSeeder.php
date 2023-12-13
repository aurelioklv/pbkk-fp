<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class PaketWisataSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(42);
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name' => 'Paket Wisata - ' . $i + 1,
                'description' => $faker->realText(200, 2),
                'price' => $faker->randomNumber(7, true),
                'image_url' => 'https://picsum.photos/200/300',
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ];
            $this->db->table('paket_wisata')->insert($data);
        }
    }
}
