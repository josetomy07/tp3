<?php

use Illuminate\Support\Facades\Route;

//controles agregado
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;

use Spatie\Permission\Models\Role;


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
    return view('welcome');
});

Auth::routes();


//Lider Router
Route::middleware(['auth','user-role:1'])->group(function()
{
   Route::get("/lider",[UsuarioController::class, 'index'])->name('home.lider');
});

//Auxiliar Route
Route::middleware(['auth','user-role:2'])->group(function()
{
    Route::get("/auxiliar",[HomeController::class, 'auxiliarHome'])->name('home.auxiliar');
    
});

//Colaborador Route
Route::middleware(['auth','user-role:3'])->group(function()
{
    Route::get("/colaborador",[HomeController::class, 'colaboradorHome'])->name('home.colaborador');
});


Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
});
