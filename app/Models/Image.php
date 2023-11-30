<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        "path", "name",
    ];
    public function user()
    {
        return $this->hasCast(User::class);
    }
    public function imageable()
    {
        return $this->morphTo();
    }
}
