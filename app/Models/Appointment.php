<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable = ['full_name' , 'user_id' , 'email','doctor', 'phone' , 'status' , 'date' ,'description'];
}
