<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LaporanKeuanganController;
use Illuminate\Support\Facades\Route;

// page under construction
Route::get('/development', function(){
    return view('errors.development');
})->name('page.development');

// laporan keuangan //


// user
Route::prefix('/user')->group(function(){
    Route::get('/{id}', [UserController::class, 'profile'])->name('user.profile');
    Route::post('/change-password', function(){
        return back()->with('success', 'Berhasil mengubah password');
    })->name('user.change-password');
});


// auth
Route::get('/login', [AuthController::class, 'login']);
Route::get('/registration', [AuthController::class, 'registration']);
Route::get('/filldata', [AuthController::class, 'filldata']);
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);

// authentication
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');

Route::post('/register', [AuthController::class, 'proses_register'])->name('proses_register');


// Akses Menu   
Route::group(['middleware' => ['auth']], function () {
    // home
    Route::get('/', function(){
        return redirect('/home');
    });
    Route::get('/home', [HomeController::class, 'index'])->name('home.index');

    // kas  //
    Route::prefix('laporan-keuangan')->group(function(){
        Route::get('/', [LaporanKeuanganController::class, 'index'])->name('laporan-keuangan.index');
        Route::get('/detail/{id_transaksi}', [LaporanKeuanganController::class, 'show'])->name('laporan-keuangan.details');
        Route::get('/create', [LaporanKeuanganController::class, 'create'])->name('laporan-keuangan.create');
        Route::get('/{lemparan}/{id_transaksi}', [LaporanKeuanganController::class, 'kas'])->name('laporan-keuangan');
        Route::post('/store', [LaporanKeuanganController::class, 'store'])->name('kas.store');
        Route::post('/kas', [LaporanKeuanganController::class, 'create_kas'])->name('laporan-keuangan.kas.store');

    });

});

// Template ------------------------------------------

Route::prefix('/template')->group(function(){
    Route::get('/', [HomeController::class, 'index']);
    // components starter template
    Route::get('/starter-page', function(){
        return view('components.starter_page.index');
    });
    Route::get('/alerts', function(){
        return view('components.alerts.index');
    });
    Route::get('/charts', function(){
        return view('components.charts.index');
    });
    Route::get('/cards', function(){
        return view('components.cards.index');
    });
    Route::get('/colors', function(){
        return view('components.colors.index');
    });
    Route::get('/forms', function(){
        return view('components.forms.index');
    });
    Route::get('/buttons', function(){
        return view('components.buttons.index');
    });
    Route::get('/tables', function(){
        return view('components.tables.index');
    });
    Route::get('/modals', function(){
        return view('components.modals.index');
    });
    Route::get('/tabulators', function(){
        return view('components.tabulators.index');
    });
    Route::get('/dashboard-v1', function(){
        return view('components.dashboards.v1');
    });
    Route::get('/dashboard-v2', function(){
        return view('components.dashboards.v2');
    });
    Route::get('/dashboard-v3', function(){
        return view('components.dashboards.v3');
    });
    Route::get('/dashboard-v4', function(){
        return view('components.dashboards.v4');
    });
    Route::get('/example/form-pagination', function(){
        return view('components.example.form-pagination');
    });
    Route::get('/example/profile-page', function(){
        return view('components.example.profile-page');
    });
    Route::get('/example/card-detail', function(){
        return view('components.example.card-detail');
    });
    Route::get('/example/card-detail-expand-item', function(){
        return view('components.example.card-with-expand-item');
    });
    Route::get('/example/login', function(){
        return view('components.auth.login');
    });
    Route::get('/example/registration', function(){
        return view('components.auth.registration');
    });
    Route::get('/example/forgot-password', function(){
        return view('components.auth.forgot_password');
    });
    Route::get('/example/change-password', function(){
        return view('components.auth.change_password');
    });
    Route::get('/example/404', function(){
        return view('components.errors.404');
    });
    Route::get('/example/500', function(){
        return view('components.errors.500');
    });
    Route::get('/example/503', function(){
        return view('components.errors.503');
    });
});

// End Template --------------------------------------------