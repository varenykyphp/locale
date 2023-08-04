<?php


use App\Http\Kernel;
use Illuminate\Support\Facades\Route;
use VarenykyLocale\Http\Controllers\CountryController;
use VarenykyLocale\Http\Controllers\LanguageController;

Route::prefix(config('varenyky.path'))->name('admin.')->middleware(resolve(Kernel::class)->getMiddlewareGroups()['web'])->group(function () {
    Route::group(['middleware' => [Authenticate::class]], function () {
        Route::resource('/languages', LanguageController::class);
        Route::resource('/countries', CountryController::class);
    });
});