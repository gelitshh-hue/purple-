<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

Route::get('/', function () {return view('admin.index');});
Route::get('/index', function () {return view('Product.index');});
Route::get('/create', function () {return view('Product.create');});
Route::get('/edit', function () {return view('Product.edit');});

