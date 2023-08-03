<?php


use App\Http\Kernel;
use Illuminate\Support\Facades\Route;
use VarenykyLocale\Http\Controllers\CountryController;
use VarenykyLocale\Http\Controllers\LanguageController;

Route::prefix(config('varenyky.path'))->name('admin.')->middleware(resolve(Kernel::class)->getMiddlewareGroups()['web'])->group(function () {
route::resource('/languages',LanguageController::class);
route::resource('/country',CountryController::class);
});