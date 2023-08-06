<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Product;

class ProductExportMonthWise implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $dd =  Product::with('booking_product')
        ->select('id', 'name', 'price', 'discount')
        ->get();

        foreach ($dd as $product) {
            $product->booking_product_count = $product->booking_product->count();
        }

        return $dd;
    }
}
