<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_registration', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('massar_cne'); // Massar/CNE (Moroccan student ID)
            $table->string('cnie')->nullable(); // CNIE (Moroccan National ID)
            $table->string('passport')->nullable(); // Passport (for foreign students)
            $table->string('first_name'); // First name
            $table->string('last_name'); // Last name
            $table->enum('gender', ['M', 'F']); // Gender (M or F)
            $table->date('date_of_birth'); // Date of birth (JJ/MM/AAAA)
            $table->string('nationality'); // Nationality
            $table->string('field_code'); // Code for field of study
            $table->integer('level_of_study'); // Level of study (1, 2, 3, etc.)
            $table->string('student_status')->nullable(); // Student situation (N, R, P)
            $table->string('diploma_access')->nullable(); // Diploma of access
            $table->string('baccalaureate_series')->nullable(); // Baccalaureate series
            $table->year('baccalaureate_year'); // Year of baccalaureate
            $table->string('diploma_speciality')->nullable(); // Diploma specialty (outside baccalaureate)
            $table->string('diploma_mention')->nullable(); // Mention of diploma (e.g., Passable, Bien)
            $table->string('diploma_location')->nullable(); // Location of diploma
            $table->year('first_registration_year'); // First registration year at the institution
            $table->string('handicap')->nullable(); // Handicap (N, A, M, etc.)
            $table->boolean('resident')->default(false); // Resident (O, N)
            $table->boolean('civil_servant')->default(false); // Civil servant (O, N)
            $table->integer('scholarship_percentage')->nullable(); // Scholarship percentage
            $table->boolean('mobility_student')->default(false); // Mobility student (O, N)
            $table->string('documents_submitted')->nullable(); // Documents submitted
            $table->timestamps(); // Created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_registration');
    }
}