<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Helpers\AppHelper;

class Genre extends Model
{
    use HasFactory;

    public $timestamps = false;


    public static function create(array $attributes = [])
    {
        $attributes['url'] = AppHelper::friendlyUrl($attributes['genre_name']);
        return static::query()->create($attributes);
    }

    public static function getGenresMenu() 
    {
        // TODO when there will be titles administration change this to something better
        return Genre::select(['genre_name AS name', 'url'])->orderBy('genre_name', 'ASC')->take(5)->get();
    }

    public static function getGenreByUrl($genreUrl) 
    {
        return Genre::select(['genre_name AS name'])->where('url', $genreUrl)->first();
    }
}
