<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiPaketWisata extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'transaksi_id' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
            ],
            'paket_wisata_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
            'review' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'rating' => [
                'type'       => 'DECIMAL',
                'constraint' => '3,2',
                'null'       => true,
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

        $this->forge->addKey(['transaksi_id', 'paket_wisata_id'], true);
        $this->forge->addForeignKey('transaksi_id', 'transaksi', 'id', '', 'CASCADE');
        $this->forge->addForeignKey('paket_wisata_id', 'paket_wisata', 'id', '', 'CASCADE');
        $this->forge->createTable('transaksi_paket_wisata');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_paket_wisata');
    }
}
