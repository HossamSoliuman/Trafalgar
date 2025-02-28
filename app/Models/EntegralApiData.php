<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntegralApiData extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'photos' => 'array', // Ensure photos are cast as an array
    ];

    public function getNewsFeaturedImageAttribute($value)
    {
        if (filter_var($value, FILTER_VALIDATE_URL) && str_starts_with($value, 'http://')) {
            return route('property.fetch-image', ['url' => urlencode($value)]);
        }
        return $value;
    }


}
