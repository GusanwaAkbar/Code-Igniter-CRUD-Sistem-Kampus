<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddBlog extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nim'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'judul'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'link'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'dosen'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'status'       => [
                'type'       => 'INT',
                'constraint' => '5',
                'default' => '0',
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pendaftaran_sempro');
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran_sempro');
    }
}