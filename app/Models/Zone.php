<?php

// app/Models/Zone.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    use HasFactory;

    protected $table = 'zones';
    protected $primaryKey = 'zone_id';
    
    protected $fillable = [
        'regionId',
        'zone_name',
        'ref',
        'mag_ref',
        'status',
        'familyId',
        'type',
        'centres',
        'checked',
        'moved'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeMinistryZones($query)
    {
        return $query->where('type', 1); // Assuming type 1 is for ministry zones
    }
}