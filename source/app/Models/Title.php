<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\AppHelper;


class Title extends Model
{
    use HasFactory;
    
    const UPDATED_AT = NULL;

    public static function create(array $attributes = [])
    {
        $attributes['url'] = AppHelper::friendlyUrl($attributes['title_name']);
        return static::query()->create($attributes);
    }
}
