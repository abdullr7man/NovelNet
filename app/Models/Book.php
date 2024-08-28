<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'poster',
        'poster_name',
        'description',
    ];

    /**
     * Define the relationship with the Borrow model.
     */
    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

