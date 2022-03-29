<?php

use Illuminate\Support\Facades\Route;
use App\Mail\SendMarkdownMail;
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

Route::get('/', function () {
    Mail::to('test@gmail.com' )->send(new SendMarkdownMail());
    echo "Mail sent";
});

