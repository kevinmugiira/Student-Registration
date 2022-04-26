<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id',
      'date_of_birth',
      'course',
      'student_id',
      'department',
      'phone',
      'country',
      'city',
      'address',
      'zip',
      'profile_photo_path'
    ];

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
