<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $faker->seed(42);
        for ($i = 0; $i < 5; $i++) {
            $male = $faker->boolean();
            if ($male) {
                $firstname = $faker->firstNameMale;
                $lastname = $faker->lastName;
            } else {
                $firstname = $faker->firstNameFemale;
                $lastname = $faker->lastNameFemale;
            }
            $fullname = $firstname . ' ' . $lastname;
            $username = $firstname . $faker->numberBetween(100, 999);
            $username = strtolower($username);
            $email = $username . '@' . $faker->freeEmailDomain;

            $data = [
                'email' => $email,
                'username' => $username,
                'fullname' => $fullname,
                'password_hash' => '$2y$10$q/rqoZHYJBC067nHuDERze679jR.IpMCwV3wYiEqytq2KQkscepZi',
                'active' => 1,
                'created_at' => Time::now(),
                'updated_at' => Time::now(),
            ];
            $this->db->table('users')->insert($data);
            $data = [
                'group_id' => 2,
                'user_id' => $this->db->insertID(),
            ];
            $this->db->table('auth_groups_users')->insert($data);
        }
    }
}
