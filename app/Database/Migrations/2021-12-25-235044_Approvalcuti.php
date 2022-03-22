<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Approvalcuti extends Migration
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
			'no_telp' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'semester'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '10'
			],
            'alasan'      => [
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
		$this->forge->createTable('approval_cuti', TRUE);


    }

    public function down()
    {
        $this->forge->dropTable('approval_cuti');
    }
}
