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
            'semester'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Perusahaan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'Keterangan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'is_approve'       => [
                'type'       => 'INT',
                'constraint' => '5',
                'default' => '0',
            ]

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pklrizal');
    }

    public function down()
    {
        $this->forge->dropTable('pklrizal');
    }
}