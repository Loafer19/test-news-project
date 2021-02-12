<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['name', 'short_text', 'text', 'image'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
