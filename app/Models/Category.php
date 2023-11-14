<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        "name", "image_id"
    ];
    public array $translatable = ["name"];
    public function image()
    {
        return $this->belongsTo(Image::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
