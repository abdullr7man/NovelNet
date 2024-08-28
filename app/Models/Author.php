<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'bio'
        // Add any other fields that should be mass-assignable
    ];
    // Define the relationship with the Book model
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}

