<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdoptStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dogs_id',
        'adopts_id',
        'adopt_status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function dog()
    {
        return $this->belongsTo(Dog::class);
    }
    public function adopt()
    {
        return $this->belongsTo(Adopt::class, 'adopts_id');
    }
}
