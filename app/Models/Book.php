<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'title',
        'description',
        'num_pages',
        'editorial',
        'isbn',
        'year_edition',
        'date_edition',
        'writer',
        'image',
    ];

}
