<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public $timestamps = false;

    public function products()
    {
        return $this->HasMany(Product::class, 'category_id');
    }
}
