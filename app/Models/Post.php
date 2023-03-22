<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Change la clé que pointe la router
    public function getRouteKeyName() {
        return 'slug';
    }

    //En utilisant la variable $with cela permet de ne pas devoir utiliser le ->load(['category', 'author']) directement sur la route et
    //permet d'être plsu efficace au nivaux des querys SQL
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
            $query->where(fn ($query) =>
                $query
                    ->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search') . '%')));
        
        $query->when($filters['category'] ?? false, fn ($query, $category) =>
            $query->whereHas('category', fn ($query) => 
                $query->where('slug', $category)));

        $query->when($filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn ($query) => 
                $query->where('username', $author)));
        
    }

    // protected $fillable = ['title', 'category_id', 'slug', 'excerpt', 'body'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function coments() {
        return $this->hasMany(Comment::class);
    }
}
