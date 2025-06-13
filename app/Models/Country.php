<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $primaryKey = 'country_id';
    public $timestamps = true;

    protected $fillable = [
        'country_name', 'iso3', 'iso2', 'phonecode', 'capital', 'currency',
        'currency_name', 'currency_symbol', 'region', 'subregion', 'flag'
    ];

    public function states()
    {
        return $this->hasMany(State::class, 'country_id', 'country_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'country_id', 'country_id');
    }
    public function HealingStreamsRegistration()
    {
        return $this->hasMany(HealingStreamsRegistration::class, 'country_id', 'country_id');
    }
}
