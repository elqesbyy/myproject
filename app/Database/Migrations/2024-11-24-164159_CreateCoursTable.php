<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCoursTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'matiere_id' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'pdf_file' => [
                'type'       => 'VARCHAR',
                'constraint' => 255, // Maximum length for file path
                'null'       => true, // Allow it to be optional
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
        $this->forge->addForeignKey('matiere_id', 'matieres', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('cours');
    }
    

    public function down()
    {
        $this->forge->dropTable('cours');
    }
}
