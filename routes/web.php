<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;


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

require __DIR__.'/auth.php';


Route::get('', function () {
    return redirect('/app/home');
});

Route::get('/app/{title}', [MovieController::class, 'index'])->middleware(['auth']);

// Route::get('/mylist', function () {
//     return view('mylist', [
//         'title' => 'My List'
//     ]);
// });

Route::get('/app/movie/{id}', [MovieController::class, 'show']);

Route::get('/add', [MovieController::class, 'create']);
Route::put('/app/{title}', [MovieController::class, 'store']);

Route::get('/edit/{id}', [MovieController::class, 'edit']);
Route::put('/edit/{id}', [MovieController::class, 'update']);

Route::delete('/app/{title}/{id}', [MovieController::class, 'destroy']);


