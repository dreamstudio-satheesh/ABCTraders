<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model {
    use HasFactory;

    protected $fillable = ['product_id', 'rack_id', 'shelf_id', 'quantity'];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function rack() {
        return $this->belongsTo(Rack::class);
    }

    public function shelf() {
        return $this->belongsTo(Shelf::class);
    }
}

