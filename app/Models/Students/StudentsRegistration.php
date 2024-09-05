<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsRegistration extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'students_registration';

    // The attributes that are mass assignable
    protected $fillable = [
        'massar_cne',
        'cnie',
        'passport',
        'first_name',
        'last_name',
        'gender',
        'date_of_birth',
        'nationality',
        'field_code',
        'level_of_study',
        'student_status',
        'diploma_access',
        'baccalaureate_series',
        'baccalaureate_year',
        'diploma_speciality',
        'diploma_mention',
        'diploma_location',
        'first_registration_year',
        'handicap',
        'resident',
        'civil_servant',
        'scholarship_percentage',
        'mobility_student',
        'documents_submitted',
    ];
}