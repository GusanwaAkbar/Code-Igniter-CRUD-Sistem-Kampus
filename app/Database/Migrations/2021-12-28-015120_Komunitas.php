<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komunitas extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id_komunitas'          => [
        //         'type'           => 'INT',
        //         'constraint'     => 11,
        //         'unsigned'       => true,
        //         'auto_increment' => true,
        //     ],
        //     'nama_komunitas'       => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        //     'ketua_komunitas'       => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        //     'bidang'       => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        //     'jumlah_anggota' => [
        //         'type' => 'INT',
        //         'constraint' => '11',
        //     ],
        // ]);
        // $this->forge->addKey('id_komunitas', true);
        // $this->forge->createTable('komunitas');
    }

    public function down()
    {
        // $this->forge->dropTable('komunitas');
    }
}
