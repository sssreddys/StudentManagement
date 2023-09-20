<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Staff extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $primaryKey = 'staff_id';
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
        'aadhar_no',
        'staff_type',
        'profession',
        'work_experience',
        'qualification',
        'religion',
        'password',
        'image_path',
        'staff_status'
    ];
}
