<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Adopt extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'user_id',
        'dogs_id',
        'first_name',
        'last_name',
        'phone_number' ,
        'email_address',
        'house_number',
        'street',
        'city',
        'adopt_status',
        'user_image'
    ];

    
    protected static function boot()
    {
        parent::boot();

        static::deleted(function ($adopt) {
            if ($adopt->dog) {
                $dog = $adopt->dog;

                Storage::delete('dog/' . $dog->image);

                $dog->delete();
            }
        });
    }

    
    public function adopts()
    {
        return $this->hasMany(Adopt::class);
    }

    public function dog()
    {
        return $this->belongsTo(Dog::class, 'dogs_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function adoptStatus()
    {
        return $this->hasOne(AdoptStatus::class, 'adopts_id');
    }
}
