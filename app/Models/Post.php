<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'content',
        'intro',
        'featured_img',
        'is_published',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
}
}
