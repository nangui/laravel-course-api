<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function categories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function childCategories()
    {
        return $this->hasMany(Category::class, 'category_id')->with('categories');
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
