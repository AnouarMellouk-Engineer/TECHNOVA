<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{


    public $timestamps = false;

    public function images()
    {
        return $this->HasMany(Image::class);
    }


    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }



    public function codes()
    {
        return $this->belongsToMany(Code::class, 'discounts')->withPivot('discount_value');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }

    public function users2()
    {
        return $this->belongsToMany(User::class, 'cards');
    }

    public function users3()
    {
        return $this->belongsToMany(User::class, 'reviews')->withPivot('comment', 'rating', 'review_date');
    }
}
