<?php

use App\Http\Livewire\Admin\AdminComponent;
use App\Http\Livewire\Editor\EditorComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserComponent;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeComponent::class)->name('home');

Route::middleware(['authadmin'])->prefix('yonetici')->group(function (){
    // Dashboard
    Route::group(['prefix' => '', 'as' => 'admin.'], function () {
        Route::get('/', AdminComponent::class)->name('dashboard');
    });
    // Users
    Route::group(['prefix' => '', 'as' => 'users.'], function () {
        Route::get('/kullanicilar', \App\Http\Livewire\Admin\User\Index::class)->name('index');
        Route::get('/kullanici-ekle', \App\Http\Livewire\Admin\User\Create::class)->name('create');
        Route::get('/kullanici-duzenle/{user_id}', \App\Http\Livewire\Admin\User\Edit::class)->name('edit');
        Route::get('/kullanici-parola-duzenle/{user_id}', \App\Http\Livewire\Admin\User\Passwordedit::class)->name('password.edit');
    });
});


Route::middleware(['autheditor'])->prefix('editor')->group(function (){
    // Dashboard
    Route::group(['prefix' => '', 'as' => 'editor.'], function () {
        Route::get('/', EditorComponent::class)->name('dashboard');
    });
});


Route::middleware(['authuser'])->prefix('kullanici')->group(function (){
    // Dashboard
    Route::group(['prefix' => '', 'as' => 'user.'], function () {
        Route::get('/', UserComponent::class)->name('dashboard');
    });
});



