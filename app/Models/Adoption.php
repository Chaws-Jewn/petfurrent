<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $fillable = ['user_id', 'pet_id', 'first_name', 'last_name', 'email_address', 'phone_number',
                        'house_number', 'street', 'city'];
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
