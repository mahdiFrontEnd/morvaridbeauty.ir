<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable=['user_id','title','row','type'];
    public function pricing_items()
    {
        return $this->hasMany(PricingItem::class);
    }
}
