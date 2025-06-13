<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany(Product::class, 'discounts')->withPivot('discount_value');
    }
}
