<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dosen extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id_dosen'          => [
        //         'type'           => 'INT',
        //         'constraint'     => 11,
        //         'unsigned'       => true,
        //         'auto_increment' => true,
        //     ],
        //     'nama_dosen'       => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        //     'email'       => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        //     'kelompok_keilmuan' => [
        //         'type' => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        // ]);
        // $this->forge->addKey('id_dosen', true);
        // $this->forge->createTable('dosen');
    }

    public function down()
    {
        // $this->forge->dropTable('dosen');
    }
}
