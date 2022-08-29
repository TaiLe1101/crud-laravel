<?php

use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'works', 'as' => 'works.'], function () {
    Route::get("/", [WorkController::class, "index"])->name("index");
    Route::get("/add", [WorkController::class, "create"])->name("add");
    Route::post("/add", [WorkController::class, "store"])->name("store");
    Route::delete("/delete/id={id?}", [WorkController::class, "destroy"])->name("destroy");
    Route::get("/edit/id={id?}", [WorkController::class, "show"])->name("show");
    Route::put("/edit/id={id?}", [WorkController::class, "edit"])->name("edit");
});
