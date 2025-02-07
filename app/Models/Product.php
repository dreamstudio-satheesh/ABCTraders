<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = ['name', 'sku', 'barcode', 'quantity', 'category_id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function attributes() {
        return $this->belongsToMany(AttributeValue::class, 'product_attributes');
    }
}
