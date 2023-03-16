<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Change la clé que pointe la route
    public function getRouteKeyName() {
        return 'slug';
    }

    protected $guarded = [];

    //En utilisant la variable $with cela permet de ne pas devoir utiliser le ->load(['category', 'author']) directement sur la route et
    //permet d'être plsu efficace au nivaux des querys SQL
    protected $with = ['category', 'author'];

    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
