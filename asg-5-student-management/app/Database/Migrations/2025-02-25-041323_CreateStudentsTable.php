<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'student_id' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'name' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'study_program' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'current_semester' => [
                'type'          => 'INT',
            ],
            'academic_status' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'entry_year' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'gpa' => [
                'type'          => 'VARCHAR',
                'constraint'    => '255'
            ],
            'created_at' => [
                'type'          => 'timestamp'
            ],
            'updated_at' => [
                'type'          => 'timestamp'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('students');
    }

    public function down()
    {
        //
        $this->forge->dropTable('students');
    }
}
