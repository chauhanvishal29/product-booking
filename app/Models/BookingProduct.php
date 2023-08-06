<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class BookingProduct extends Model
{
    use HasFactory;
    public $table = 'booking_products';
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
