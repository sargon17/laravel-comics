<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    $nav = config("nav");
    $footerNav = config("footerNav");
    $social = config("social");
    $comics = config("comics");

    return view("home", compact(["comics", "nav", "footerNav", "social"]));
});

Route::get("/detail/{id}", function ($id) {
    $nav = config("nav");
    $footerNav = config("footerNav");
    $social = config("social");
    $comics = config("comics");
    return view(
        "detail",
        compact(["comics", "nav", "footerNav", "social", "id"])
    );
});
