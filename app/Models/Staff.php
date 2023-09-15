<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'staff_id',
        'registration_date',
        'registration_number',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'phone_no',
        'address',
        'email',
        'nationality',
        'alternate_phone_no',
        'aadhar_no',
        'staff_type',
        'profession',
        'work_experience',
        'qualification',
        'religion',
        'password',
        'image_path',
        'remarks',
    ];
}
