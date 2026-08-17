<?php
use App\Http\Controllers\Site\SiterController;
use Illuminate\Support\Facades\Route;

Route::get('/contato', [SiterController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
