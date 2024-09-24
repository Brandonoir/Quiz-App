<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAnswersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'question_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'answer_text' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('question_id', 'question', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('answer');
    }

    public function down()
    {
        $this->forge->dropForeignKey('answer', 'question_id');
        $this->forge->dropTable('answer');
    }
}