<?php
Route::prefix('strona')
->group(function () {
    Route::get('/', [App\Http\Controllers\Front\FrontController::class, 'show'])->name('front.index');
});