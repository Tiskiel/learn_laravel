<?php

use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use MailchimpMarketing;

Route::post('newsletter', function () {
    
    request()->validate([
        'email' => ['required', 'email']
    ]);

    $mailchimp = new MailchimpMarketing\ApiClient();


    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us11'
    ]);

    $response = $mailchimp->lists->addListMember('54632d5009',[
        'email_address' => request('email'),
        'status' => 'pending'
    ]);


    return redirect('/')->with('success', 'You are now signed up for our newsletter');
});

Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('posts/{post}', [PostController::class, 'show']);

Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');