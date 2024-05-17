<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petcare extends Model
{
    use HasFactory;

    protected $table = 'pet_cares';

    protected $fillable = ['title', 'description', 'image'];
}

