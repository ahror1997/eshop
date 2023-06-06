<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    /* The attributes that are mass assignable. */
    protected $fillable = [
        "name",
        "price",
        "description",
        "category_id",
        "size"
    ];

    /**
    * @return HasOne
    */
    public function category()
    {
        return $this->hasOne(Category::class);
    }
}
