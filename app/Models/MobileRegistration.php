<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobileRegistration extends Model
{
    protected $fillable = ['mobile_number', 'otp', 'status'];
}
