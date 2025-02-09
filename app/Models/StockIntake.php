<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockIntake extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'rack_id',
        'shelf_id',
        'supplier',
        'intake_date'
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function rack() {
        return $this->belongsTo(\App\Models\Rack::class);
    }

    public function shelf() {
        return $this->belongsTo(\App\Models\Shelf::class);
    }
}
