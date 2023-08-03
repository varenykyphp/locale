<?php


use App\Http\Kernel;
use Illuminate\Support\Facades\Route;

use Varenyky\Http\Controllers\languageController;

Route::prefix(config('varenyky.path'))->name('admin.')->middleware(resolve(Kernel::class)->getMiddlewareGroups()['web'])->group(function () {
route::resource('/languages',languageController::class);
route::resource('/country',countryController::class);
});