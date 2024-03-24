<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\Reservation\ReservationController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Reservation;

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
    
    //get all users without condition
    //$users = DB::table('users')->get();

    //get users with single conditions
    //$users = DB::table('users')->where('id', 6)->get();

    /* //get users with multiple conditions
    //$users = DB::table('users')->where('id', 6)->where('first_name','Toluwalope')->get();
    $users = DB::table('users')
        ->where('id', 6)
        ->where('email','iloritoluwalopestephen@gmail.com')
        ->get(); */

    /* //insert users into database
    $user = DB::table('users')->insert([
        'first_name' => 'Fakeye',
        'last_name' => 'Tomiwa',
        'email' => 'tomiwa@example.com',
        'password' => 'password'
    ]); */

    
    /* //update users with condition
    $updateusers = DB::table('users')
        ->WHERE('id', 7)
        ->WHERE('first_name', 'fakeye')
        ->UPDATE([
            'email' => 'how@gmail.com'
        ]); */
      
        
    //$deleteusers = DB::table('users')->WHERE('id', 8)->DELETE();


    //count the number of rows that match the conditions
    /* $count = DB::table('users')
        ->where('id', 6)
        ->where('email', 'iloritoluwalopestephen@gmail.com')
        ->count(); */
    
    //check if a row exists that matches the conditions
    /* $exists = DB::table('users')
        ->where('id', 6)
        ->where('email', 'iloritoluwalopestephen@gmail.com')
        ->exists(); */

    
    //dd($exists);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/reservation', [ReservationController::class, 'view'])->name('reservation.view');
    Route::post('/reservation/create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::get('/reservation/success', function () {
        // Retrieve the session flash data
        $models = session()->get('reservation_models');
        // Return the view and pass the model array data

       if ($models){
            return view('/reservation/success', ['reservation' => $models]);
       } else {
            return redirect('/reservation');
       }
    });
    Route::get('/dashboard', [ReservationController::class, 'dashboard'])->name('dashboard');
    Route::get('/reservation/detail/{reservationcode}', function ($reservationcode) {
        $reservation = Reservation::where('reservation_code', $reservationcode)->first();
        if ($reservation){
            return view('/reservation/detail', ['reservation' => $reservation]);
        } else {
            return redirect('/dashboard');
        }
    });
});

require __DIR__.'/auth.php';
