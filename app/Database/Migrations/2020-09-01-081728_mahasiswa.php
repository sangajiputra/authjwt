<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id_mahasiswa' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ],
            'nama_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'jurusan_mahasiswa' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'create_at' => [
                'type' => 'DATETIME'
            ],
            'update_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        $this->forge->addKey('id_mahasiswa');
        $this->forge->createTable('mahasiswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
