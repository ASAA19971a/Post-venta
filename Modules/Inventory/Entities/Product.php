<?php

namespace Modules\Inventory\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $connection ='mongodb';
    protected $collection ='products';

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Inventory\Database\factories\ProductFactory::new();
    }
}