<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Teacher extends Model
{
    protected $dates = ['date_of_birth'];
    use HasFactory;
    public function getDateOfBirthAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-Y');
    }
    protected $fillable = [
        'name',
        'image',
        'gender',
        'date_of_birth',
        'address',
        'mobile',
        'email',
        'qualification',
        'experience',
        'remarks',
    ];
}
