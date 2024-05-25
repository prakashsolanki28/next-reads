<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class OrderItem extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "order_id",
        "book_id",
    ];

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
