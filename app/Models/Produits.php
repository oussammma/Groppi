<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function categories()
    {
        return $this->belongsTo(categorie::class);
    }
    public function marques()
    {
        return $this->belongsTo(Marques::class);
    }
}
