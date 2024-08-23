<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    // Define the relationship with the Addonservice model
    public function addonservices()
    {
        return $this->hasMany(Addonservice::class, 'service_id');
    }
    public function gallery()
    {
        return $this->hasMany(Gallery::class, 'service_id');
    }

    protected static function booted()
    {
        static::deleted(function ($services) {
            // Delete all related addon services when a service is deleted
            $services->addonservices()->delete();
        });
    }
}

