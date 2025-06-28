<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $faqs = \App\Models\Faq::active()->ordered()->get();
    $bugs = \App\Models\Bug::active()->ordered()->get();
    $existingFeatures = \App\Models\Feature::active()->existing()->ordered()->get();
    $plannedFeatures = \App\Models\Feature::active()->planned()->ordered()->get();
    
    return Inertia::render('Landing', [
        'faqs' => $faqs,
        'bugs' => $bugs,
        'existingFeatures' => $existingFeatures,
        'plannedFeatures' => $plannedFeatures
    ]);
})->name('home');

// Redirect old routes to home page with hash
Route::get('/privaatsuspoliitika', function () {
    return redirect('/#privaatsuspoliitika');
})->name('privacy');

Route::get('/kkk', function () {
    return redirect('/#kkk');
})->name('faq');

Route::get('/minust', function () {
    return redirect('/#minust');
})->name('about');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Hidden admin access
Route::middleware(['auth', 'verified'])->prefix('kiisutab-kartulit')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.blog.index');
    });
});

// Blog Admin Routes
Route::middleware(['auth', 'verified'])->prefix('anne-blogi/admin')->name('admin.')->group(function () {
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
