<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //Post::with('Category')->get() === Post::all() mais génère que 2query comparé à all() qui génère une query par éléments.
    $listPosts = Post::with('Category')->get();

    return view('posts', ["posts" => $listPosts]);
});

Route::get('posts/{post}', function (Post $post) {
    return view('post', ['post' => $post]);
});

Route::get('categories/{category}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});