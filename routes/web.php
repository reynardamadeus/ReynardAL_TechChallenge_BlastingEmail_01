<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [AnnouncementController::class, 'show'])->name('show');
Route::get('/announce', [AnnouncementController::class,'createAnnouncement'])->name('createAnn');
Route::post('/createEmail', [EmailController::class, 'store'])->name('createEmail');
Route::post('/announce', [AnnouncementController::class, 'store'])->name('store');
