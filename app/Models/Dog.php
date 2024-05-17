<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;


class Dog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'age',
        'breed',
        'gender',
        'description',
        'image'
    ];

    protected static function boot()
{
    parent::boot();
    static::deleted(function ($adopt) {
        info('Adopt deleted event fired.');

        if ($adopt->dog) {
            $dog = $adopt->dog;

            Storage::delete('dog/' . $dog->image);

            info('Dog deleted: ' . $dog->id);

            $dog->delete();
        }
    });
}

    public function adopts()
    {
        return $this->hasMany(Adopt::class, 'dogs_id');
    }
    public function adoptStatuses()
    {
        return $this->hasMany(AdoptStatus::class);
    }

}
