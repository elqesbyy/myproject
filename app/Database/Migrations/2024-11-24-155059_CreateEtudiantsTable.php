<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEtudiantsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'id_filiere' => [
                'type' => 'INT',
                'unsigned'       => true,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_filiere', 'filiere', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('etudiants');
    }
    

    public function down()
    {
        $this->forge->dropTable('etudiants');
    }
}
