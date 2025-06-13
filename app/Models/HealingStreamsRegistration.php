<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealingStreamsRegistration extends Model
{
    use HasFactory;

     protected $table = 'hslhs_kids';
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'zone_id',
        'age',
        'country_id',
        'state_id',
        'city'
    ];

    protected $casts = [
        'age' => 'integer'
    ];

}
