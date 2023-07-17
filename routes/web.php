<?php

use App\Http\Controllers\DocsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $rulesConfig = config('sidebar.rules', []);
    unset($rulesConfig['all-rules']);

    $rules = collect($rulesConfig)
        ->take(30)
        ->chunk(5)
        ->all();

    return view('index', compact('rules'));
})->name('home.index');

Route::get('docs/{version}/{page?}', DocsController::class)->name('docs');
Route::view('docs-not-found', 'docs.not-found-page')->name('docs.not-found');
