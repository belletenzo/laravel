<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderProduct extends Model
{
    use HasFactory;
    protected $table = 'order_product';
    public $timestamps = false;
    public function product():HasMany
    {
        return $this->hasMany(Product::class, 'product_id');
    }
    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
