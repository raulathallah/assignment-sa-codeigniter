<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        //
        // id (Primary Key)
        // student_id (Unique)
        // name
        // study_program
        // current_semester
        // academic_status
        // entry_year
        // gpa
        // created_at
        // updated_at

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
