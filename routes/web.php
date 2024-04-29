<?php

use App\Http\Controllers\CardImageController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageViewController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoGalleryController;
use App\Models\Photogallery;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageViewController::class, 'home'])->name('home');
Route::view('/about/company', 'pages.frontend.company_introduction')->name('company_introduction');
Route::view('/services/wedding/planner', 'pages.frontend.servicesWedplanner')->name('servicesWedplanner');
Route::view('/services/catering', 'pages.frontend.servicesCatering')->name('servicesCatering');
Route::view('/contact', 'pages.frontend.contact')->name('contact');
Route::get('/gallery/photos', [PageViewController::class, 'photogallery'])->name('photogallerys');
//Route::view('/gallery/videos', 'pages.frontend.video_gallery')->name('video_gallery');
Route::get('/gallery/videos', [PageViewController::class, 'video_gallery'])->name('video_gallery');

//Route::view('dashboard', 'pages.backend.slider')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::get('/dashboard', [SliderController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/upload-image', [SliderController::class, 'store'])->middleware(['auth', 'verified'])->name('upload.image.slider');
Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->middleware(['auth', 'verified'])->name('sliders.delete');

Route::get('/experience', [ExperienceController::class, 'index'])->middleware(['auth', 'verified'])->name('experience');
Route::post('/experience', [ExperienceController::class, 'store'])->middleware(['auth', 'verified'])->name('upload.image.experience');
Route::delete('/experience/{id}', [ExperienceController::class, 'destroy'])->middleware(['auth', 'verified'])->name('experience.delete');

Route::get('/gallery/photo', [PhotoGalleryController::class, 'index'])->middleware(['auth', 'verified'])->name('gallery.photo');
Route::post('/gallery/photo', [PhotoGalleryController::class, 'store'])->middleware(['auth', 'verified'])->name('upload.gallery.photo');
Route::delete('/gallery/photo/{id}', [PhotoGalleryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('gallery.photo.delete');

Route::get('/gallery/video', [VideoGalleryController::class, 'index'])->middleware(['auth', 'verified'])->name('gallery.video');
Route::post('/gallery/video', [VideoGalleryController::class, 'store'])->middleware(['auth', 'verified'])->name('upload.gallery.video');
Route::delete('/gallery/video/{id}', [VideoGalleryController::class, 'destroy'])->middleware(['auth', 'verified'])->name('gallery.video.delete');


Route::get('/cards/photo', [CardImageController::class, 'index'])->middleware(['auth', 'verified'])->name('card.photo');
Route::put('/cards/photo/{id}', [CardImageController::class, 'update'])->middleware(['auth', 'verified'])->name('card.photo.update');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
