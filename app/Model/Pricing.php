<?php

namespace App\Model;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{

protected $table='tariffes';

    public $fillable = ['title', 'price'];




    public function pricing_items()
    {
        return $this->belongsToMany(PricingItem::class)->withPivot('value');
    }
}
