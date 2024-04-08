<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pet extends Model
{
    use HasFactory, SoftDeletes;
    public $fillable = [
        'type',
        'breed',
        'name',
        'gender',
        'description',
        'image'
    ];


    public function adoption()
    {
        return $this->has(Adoption::class);
    }
}
