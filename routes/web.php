<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect("/t");
});

Route::group(["prefix" => "t", "as" => "tabulator."], function () {
    Route::get("/", [UserController::class, "index"])->name("index");
    Route::get("/basic", [UserController::class, "basic"])->name("basic");
    Route::get("/translations", [UserController::class, "localization"])->name("localization");
    Route::get("/column-filter", [UserController::class, "columnFilter"])->name("column-filter");
    Route::get("/global-filter", [UserController::class, "globalFilter"])->name("global-filter");
    Route::get("/sorters", [UserController::class, "sorters"])->name("sorters");
    Route::get("/export", [UserController::class, "export"])->name("export");
    Route::get("/json", [UserController::class, "json"])->name("json");
});

require __DIR__.'/auth.php';
