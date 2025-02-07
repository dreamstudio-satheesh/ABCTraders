<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shelf extends Model {
    use HasFactory;

    protected $fillable = ['rack_id', 'shelf_level', 'capacity'];

    public function rack() {
        return $this->belongsTo(Rack::class);
    }
}

