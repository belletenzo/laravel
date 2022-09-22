<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    protected $table = 'products';
    public $timestamps = false;
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function order_product():BelongsToMany
    {
        return $this->belongsToMany(OrderProduct::class);
    }
}
