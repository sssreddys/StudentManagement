<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'std_id',
        'registration_date',
        'registration_number',
        'std_first_name',
        'std_last_name',
        'std_gender',
        'std_dob',
        'std_father_name',
        'std_mother_name',
        'std_phone_no',
        'std_address',
        'std_email',
        'std_nationality',
        'std_alternate_phone_no',
        'std_aadhar_no',
        'class',
        'religion',
        'student_image_path',
        'password',
        'remarks',
    ];
}
