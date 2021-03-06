<?php
use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengasuhController;
use App\Http\Controllers\FormDonasiController;
use App\Http\Controllers\FronDonasiController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes([
    'register' => false,
    'reset' => false,
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['prefix' => 'admin', 'middleware' => [
//     'auth',
//     'role:admin',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman admin';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile admin';
//     });
// });

// Route::group(['prefix' => 'pengguna', 'middleware' => [
//     'auth',
//     'role:pengguna',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman pengguna';
//     });

//     Route::get('profile', function () {
//         return 'halaman profile pengguna';
//     });
// });

// Route::group(['prefix' => 'pembelian', 'middleware' => [
//     'auth',
//     'role:admin|kasir',
// ]], function () {
//     Route::get('/', function () {
//         return 'halaman pembelian';
//     });

//     Route::get('laporan', function () {
//         return 'halaman profile pembelian';
//     });
// });

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    route::get('buku', function () {
        return view('buku.index');
    })->middleware(['role:admin|pengguna']);

    route::get('pengarang', function () {
        return view('pengarang.index');
    })->middleware(['role:admin']);

    Route::resource('pengasuh', PengasuhController::class)->middleware(['role:admin']);
    Route::resource('anak_asuh', AnakAsuhController::class)->middleware(['role:admin']);
    Route::resource('kegiatan', KegiatanController::class)->middleware(['role:admin']);
    Route::resource('form_donasi', FormDonasiController::class)->middleware(['role:admin']);
    Route::post('form_donasi/tambah', [FormDonasiController::class,'tambah'])->middleware(['role:Admin']);
});

route::get('pronen', function(){
    return view('pronen.index');
});
Route::get('/beranda', function () {
    return view('pronen.index');
})->name('beranda');

Route::get('/sejarah', function () {
    return view('pronen.About');
})->name('sejarah');

Route::get('kegiatan2', [FrontendController::class, 'kegiatann'])->name('kegiatan');
Route::get('beranda', [FrontendController::class, 'data'])->name('beranda');
Route::resource('donasis', FronDonasiController::class);

Route::get('/donasi', function () {
    return view('pronen.donasi');
})->name('donasi');

Route::get('/berita', function () {
    return view('pronen.single-blog');
})->name('berita');

Route::get('/kontak', function () {
    return view('pronen.contact');
})->name('kontak');

