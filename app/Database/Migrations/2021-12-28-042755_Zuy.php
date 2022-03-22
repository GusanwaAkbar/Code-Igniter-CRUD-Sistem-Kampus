<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Zuy extends Migration
{
    public function up()
    {
        //

        // Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'nim'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
				
			],
			'email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'linkcv'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
            'linkedin'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],

            'is_approve'      => [
				'type'           => 'INT',
                'constraint'     => '100',
				'default'     => 0
			],

		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('universitas_pkl', TRUE);


    }

    public function down()
    {
        $this->forge->dropTable('universitas_pkl');
    }
}
