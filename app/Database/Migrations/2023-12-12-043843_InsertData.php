<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InsertData extends Migration
{
    public function up()
    {
        // Insert data into the first table
        $dataTable1 = [
            [
                'name' => 'admin',
                'description' => 'Site Administrator',
            ],
            [
                'name' => 'user',
                'description' => 'Regular User',
            ],
        ];

        $this->db->table('auth_groups')->insertBatch($dataTable1);

        // Insert data into the second table
        $dataTable2 = [
            [
                'name' => 'manage-users',
                'description' => 'Manage all users',
            ],
            [
                'name' => 'manage-profile',
                'description' => 'Manage own profile',
            ],
        ];

        $this->db->table('auth_permissions')->insertBatch($dataTable2);

        // Insert data into the third table
        $dataTable3 = [
            [
                'group_id' => 1,
                'permission_id' => 1,
            ],
            [
                'group_id' => 1,
                'permission_id' => 2,
            ],
            [
                'group_id' => 2,
                'permission_id' => 2,
            ],
        ];

        $this->db->table('auth_groups_permissions')->insertBatch($dataTable3);
    }

    public function down()
    {
        //
    }
}
