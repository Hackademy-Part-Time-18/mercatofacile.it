<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\RevisorController;
use App\Livewire\Dashboard\Stats;
use App\Livewire\Revisor;
use App\Models\User;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

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

// Route::get('/dashboard/crea', [HomepageController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::get('/', [HomepageController::class,'homepage'])->name('homepage');

Route::get('/show/prodotto/{product}', [HomepageController::class,'show'])->name('show');



Route::prefix('/dashboard')->name('dashboard.')->middleware('auth')->group(function () {
    Route::get('/crea', [HomepageController::class, 'dashboard'])->name('crea');
	Route::get('/statistiche',Stats::class)->name('stats');
	Route::get('/revisiona',Revisor::class)->middleware('isRevisor')->name('revisiona');
});
Route::get('/categoria/{category}', [HomepageController::class, 'categoryShow'])->name('categoryShow');

// Home revisore
Route::get('/revisor/homepage',[RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

//Accetta annuncio
Route::patch('/accetta/annuncio/{announcement}',[RevisorController::class,'acceptAnnouncement'])->middleware('isRevisor')->name('revisor.accept_announcement');

//Rifiuta annuncio
Route::patch('/rifiuta/annuncio/{announcement}',[RevisorController::class,'rejectAnnouncement'])->middleware('isRevisor')->name('revisor.reject_announcement');

//Richiedi di diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');

//Rendi Utente Revisore
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');

//Socialite
// Route::get('/auth/{provider}/redirect', function ($provider) {
//     return Socialite::driver($provider)->redirect();
// })->name('social.login');
 
// Route::get('/auth/{provider}/callback', function ($provider) {
//     $providerUser = Socialite::driver($provider)->user();

//     $user = User::updateOrCreate(
        
//     ['email' => $providerUser->email,], 
    
//     [
//         'name' => $providerUser->name,
//         'email' => $providerUser->email,
//         'password' => Hash::make($providerUser->token),
//         //'provider_token' => $providerUser->token,
//         //'provider_refresh_token' => $providerUser->refreshToken,
//     ]);
 
//     Auth::login($user);
 
//     return redirect('/dashboard/crea');

// })->name('social.callback');