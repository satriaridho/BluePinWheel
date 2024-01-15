<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', function () {
    return view('about');
});
Route::get('/portfolio', [PageController::class, 'portfolio']);

Route::get('/service', function () {
    return view('service');
});

Route::get('/estimasi', [CountController::class, 'showEsti']);
Route::post('/estimasi/post', [CountController::class, 'count'])->name('count.post');

Route::get('/setting/{id}', [AuthController::class, 'showCustomerAcc']);
Route::post('/setting/update/{id}', [AuthController::class, 'updateCstmrAcc'])->name('setting.edit');


Route::get('/testimoni', [CommentController::class, 'showTesti'])->name('testimoni');
Route::get('/testimoni/tambah', [CommentController::class, 'showAddTesti']);
Route::post('/testimoni/add', [CommentController::class, 'testiAdd'])->name('testi.add');
Route::delete('/testimoni/delete/{id}', [CommentController::class, 'testiDelete'])->name('testi.hapus');


Route::get('/contact', [MessageController::class, 'showMessage']);
Route::post('/contact/submit', [MessageController::class, 'sendMessage'])->name('send.message');
Route::post('/contact/submit/{id}', [MessageController::class, 'sendMessage'])->name('send.messageAuth');


Route::get('/login/customer', [AuthController::class, 'customerLogin'])->name('login.customer');
Route::post('/login/customer/submit', [AuthController::class, 'submitLogin'])->name('login.submit');
Route::post('/register/submit', [AuthController::class, 'submitRegis'])->name('register.submit');

// Auth AdminS
Route::get('/admin/admin/login', [AdminController::class, 'showLoginAdmin'])->name('login.admin');
Route::post('/admin/login/submit', [AdminController::class, 'submitAdmin'])->name('admin.submit')->middleware('isLogin');
Route::post('/admin/admin/register', [AdminController::class, 'uhuyAdmin'])->name('admin.register');

Route::get('/logout', [AuthController::class, 'doLogout']);


Route::group(
    ['middleware' => ['auth:admin']],
    function () {


        Route::get('/admin/dashboard', [DashboardController::class, 'showDasboard'])->name('dashboard');

        Route::get('/admin/customers', [DashboardController::class, 'showAdminCustomer'])->name('customer');
        Route::delete('/admin/customers/hapus/{id}', [DashboardController::class, 'deleteCustomer'])->name('delete.customer');

        Route::get('/admin/messages', [DashboardController::class, 'showAdminMessages'])->name('message');
        Route::delete('/admin/messages/hapus/{id}', [DashboardController::class, 'deleteMessages'])->name('delete.message');

        Route::get('/admin/porto', [PortoController::class, 'showAdminPorto'])->name('porto');
        Route::get('/admin/porto/tambah', [PortoController::class, 'showPortoTambah'])->name('porto.nambah');
        Route::post('/admin/porto/add', [PortoController::class, 'PortoAdd'])->name('admin.add');
        Route::get('/admin/porto/ubah/{id}', [PortoController::class, 'showPortoUbah'])->name('porto.ubah');
        Route::post('/admin/porto/edit/{id}', [PortoController::class, 'PortoEdit'])->name('admin.edit');
        Route::delete('/admin/porto/hapus/{id}', [PortoController::class, 'PortoDelete'])->name('porto.hapus');

        Route::get('/admin/comment', [CommentController::class, 'showAdminComment'])->name('comment');
        Route::delete('/admin/comment/hapus/{id}', [CommentController::class, 'deleteAdminComment'])->name('comment.delete');
        Route::post('/admin/setujui/{id}', [CommentController::class, 'kepastian'])->name('setujui');

        Route::get('/admin/setting/{id}', [AdminController::class, 'showSetting'])->name('setting');
        Route::post('/admin/setting/update/{id}', [AdminController::class, 'updateSetting'])->name('setting_name');
    }
);



Route::group(
    ['middleware' => ['auth:admin']],
    function () {
        Route::get('/admin', function () {
            return view('admin.dashboard');
        });
    }
);
Route::get('/admin/login', [AuthController::class, 'showLogin']);
