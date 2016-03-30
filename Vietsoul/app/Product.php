<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_code','product_name','product_price','product_description','product_number'
    ];
}
