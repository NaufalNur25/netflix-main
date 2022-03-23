<?php

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

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/edit', function () {
    $username = Auth::user()->name;
return view('edit', [
    'title' => 'Update',
    'username' => $username
]);
});

Route::get('/movie', function () {
    $username = Auth::user()->name;
return view('movie', [
    'title' => 'Movie',
    'username' => $username
]);
});

Route::get('/edit/{back}', function () {
    return redirect('/dashboard');
});

// Route::get('/mylist', function () {
//     return view('mylist', [
//         'title' => 'My List'
//     ]);
// });

Route::get('/profile', function () {
    $email = Auth::user()->email;
    $username = Auth::user()->name;


    return view('profile',[
        'title' => 'Setting',
        'email' => $email,
        'username' => $username
    ]);
});

Route::get('/dashboard', function () {
    $username = Auth::user()->name;
    return view('home', [
        'title' => 'Home',
           'username' => $username
    ]);
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::get('/nama', function () {
    return view('nama', [
        'title' => 'nama',
        'nama' => 'Naufal Nur Hafizh'
    ]);
});

Route::get('/kelas', function () {
    return view('kelas', [
        'title' => 'kelas',
        'kelas' => 'XI RPL I'
    ]);
});

Route::get('/teman', function () {
    $teman = array('Junde', 'Ahmade' ,'Syahrul');
    $nis = array('20211158', '20255548', '2033326');
    $tahun = array('17', '18', '17');

    return view('teman', [
        'teman' => $teman,
        'nis' => $nis,
        'tahun' => $tahun
    ]);
});


Route::get('/add', [MovieController::class, 'create']);
Route::post('/add', [MovieController::class, 'store']);
Route::get('/add', function () {
    return view('add', [
        'title' => 'Add'
    ]);
    });


Route::get('/single/{id}', [MovieController::class, 'show']);

