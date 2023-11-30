<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = [
        "category_id", "name", "image_id", "price", "count",
    ];
    public array $translatable = ["name"];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    public function stock()
    {
        return $this->hasMany(Stock::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, "imageable");
    }
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function hasReview($id)
    {
        return $this->reviews()->where('user_id', $id)->exists();
    }
}
