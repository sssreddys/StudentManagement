<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddStudentMark extends Model
{
    use HasFactory;
    protected $fillable = [
        'class',
        'std_id',
        'std_name',
        'eng_marks',
        'tel_marks',
        'maths_marks',
        'science_marks',
        'biology_marks',
        'social_marks',
        'computer_marks',
        'total_marks',
        'percentage',
        'result',
    ];
}
