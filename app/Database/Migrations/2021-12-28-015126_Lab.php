<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lab extends Migration
{
    public function up()
    {
        // $this->forge->addField([
        //     'id_lab'          => [
        //         'type'           => 'INT',
        //         'constraint'     => 11,
        //         'unsigned'       => true,
        //         'auto_increment' => true,
        //     ],
        //     'nama_lab'       => [
        //         'type'       => 'VARCHAR',
        //         'constraint' => '50',
        //     ],
        //     'blog_description' => [
        //         'type' => 'TEXT',
        //         'null' => true,
        //     ],
        // ]);
        // $this->forge->addKey('blog_id', true);
        // $this->forge->createTable('blog');
    }

    public function down()
    {
        // $this->forge->dropTable('blog');
    }
}
