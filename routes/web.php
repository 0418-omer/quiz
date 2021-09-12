<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\SorularController;




Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->get('/panel', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth','isAdmin'],'prefix'=>'admin'], function (){

        Route::get('quizzers/{id}',[QuizController::class,'destroy'])->whereNumber('id')->name('quizzers.destroy');
        Route::resource('quizzers', QuizController::class);
        Route::resource('quiz/{quiz_id}/sorular', SorularController::class);

        


});
