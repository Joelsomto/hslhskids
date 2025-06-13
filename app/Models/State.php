<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $primaryKey = 'state_id';
    public $timestamps = true;

    protected $fillable = [
        'state_name', 'country_id', 'country_code', 'type', 'latitude', 'longitude'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'country_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'state_id', 'state_id');
    }
    public function HealingStreamsRegistration()
    {
        return $this->hasMany(HealingStreamsRegistration::class, 'state_id', 'state_id');
    }
}
