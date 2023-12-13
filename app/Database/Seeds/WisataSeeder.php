<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class WisataSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(42);
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'name' => $faker->city,
                'description' => $faker->realText(200, 2),
                'price' => $faker->randomNumber(5, true),
                'image_url' => 'https://picsum.photos/200/300',
                'location_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.21502755172!2d112.55679140248253!3d-7.2755928080888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1702450879641!5m2!1sen!2sid',
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
            ];
            $this->db->table('wisata')->insert($data);
        }
    }
}
