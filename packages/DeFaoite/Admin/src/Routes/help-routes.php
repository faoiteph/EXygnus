<?php

use Illuminate\Support\Facades\Route;
use DeFaoite\Admin\Http\Controllers\HelpController;

/**
 * Help & Resources routes.
 */
Route::controller(HelpController::class)->prefix('help')->group(function () {
    Route::get('', 'index')->name('admin.help.index');
});
