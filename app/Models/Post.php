<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'latitude',
        'longitude',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Accessor to get location as array (lat, lng)
    protected function location(): Attribute
    {
        return Attribute::get(function ($value, $attributes) {
            if (isset($attributes['latitude']) && isset($attributes['longitude'])) {
                return [
                    'latitude' => (float)$attributes['latitude'],
                    'longitude' => (float)$attributes['longitude'],
                ];
            }
            return null;
        });
    }

}
