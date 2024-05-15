<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * 1.Get = menampilkan
 * 2.post = mengirim data
 * 3.put = meng-update data
 * 4.delate = menghapus data
 */

// route untuk menampilkan teks 
Route::get('/salam/{nama}', function($nama){
    return "Assalamualaikum $nama";
});

Route::get('admin/dashboard',[DashboardController::class, 'index']);