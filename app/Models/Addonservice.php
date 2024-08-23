<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addonservice extends Model
{
    use HasFactory;

    // Define the inverse relationship to Services
    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id','id');
    }
}
