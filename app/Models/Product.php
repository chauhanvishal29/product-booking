<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BookingProduct;

class Product extends Model
{
    use HasFactory;

    public $table = 'product';

    protected $guarded = [];

    public function booking_product()
    {
        return $this->hasMany(BookingProduct::class,'product_id');
    }
}
