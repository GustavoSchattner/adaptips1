<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{    
    protected $fillable=[
        'name'
    ];
    public function country()
    {
        return $this->hasOne(Movie::class, 'country_id');
    }
    use HasFactory;
}
