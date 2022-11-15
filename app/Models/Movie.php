<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'movies';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movies_genres');
    }


    public function genreList()
    {
        return $this->genres->map(function ($genre) {
            return $genre->label;
        })->toArray();
    }
}
