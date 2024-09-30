<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQuestionTable extends Migration
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
            'test_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'question_text' => [
                'type' => 'TEXT',
            ],
            'answer_type' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'answer' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'correct_answer' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
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
        $this->forge->addForeignKey('test_id', 'test_form', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('question');
    }

    public function down()
    {
        $this->forge->dropForeignKey('question', 'test_id');
        $this->forge->dropTable('question');
    }
}
