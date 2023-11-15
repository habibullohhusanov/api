<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Stock extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        "product_id", "attribute", "quantily",
    ];
    public array $translatable = [
        "quantily",
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
