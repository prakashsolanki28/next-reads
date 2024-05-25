<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "user_id",
        "total_price",
        "total_qty",
        "is_paid",
        "status"
    ];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
