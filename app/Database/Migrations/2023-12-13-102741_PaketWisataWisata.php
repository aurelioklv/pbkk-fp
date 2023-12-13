<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaketWisataWisata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'paket_wisata_id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'wisata_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'created_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
            'updated_at' => [
                'type'       => 'DATETIME',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey(['paket_wisata_id', 'wisata_id'], true);
        $this->forge->addForeignKey('paket_wisata_id', 'paket_wisata', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('wisata_id', 'wisata', 'id', '', 'CASCADE');
        $this->forge->createTable('paket_wisata_wisata');
    }

    public function down()
    {
        $this->forge->dropTable('paket_wisata_wisata');
    }
}
