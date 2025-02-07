<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = ['name', 'sku', 'barcode', 'quantity'];

    public function stockIntakes() {
        return $this->hasMany(StockIntake::class);
    }

    public function inventory() {
        return $this->hasMany(Inventory::class);
    }
}
