<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    //relasi one to many dengan category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

        // Mutator untuk slug
        public function setTitleAttribute($value)
        {
            $this->attributes['title'] = $value;
            $this->attributes['slug'] = Str::slug($value);
        }
}
