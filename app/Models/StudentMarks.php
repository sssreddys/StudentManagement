<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMarks extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id',
        'teacher_id',
        'class',
        'student_name',
        'english_marks',
        'hindi_marks',
        'telugu_marks',
        'maths_marks',
        'science_marks',
        'biology_marks',
        'social_marks',
        'computer_marks',
        'total_marks',
    ];
}
