<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockIntake extends Model {
    use HasFactory;

    protected $fillable = ['factory_name', 'product_id', 'quantity', 'received_date'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
