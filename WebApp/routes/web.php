<?php

use App\Http\Livewire\Anak;
use App\Http\Livewire\AddAnak;
use App\Http\Livewire\EditAnak;
use App\Http\Livewire\DetailAnak;
use App\Http\Livewire\Checkup;
use App\Http\Livewire\AddCheckup;
use App\Http\Livewire\EditCheckup;
use App\Http\Livewire\DetailCheckup;
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
    return view('welcome');
});

// Pengolahan data anak
Route::get('/all-anak', Anak::class);

Route::get('/all-anak/add', AddAnak::class)->name('all-anak.add');

Route::get('/all-anak/edit/{anak_id}', EditAnak::class)->name('all-anak.edit');

// Pengolahan data checkup
Route::get('/all-checkup', Checkup::class);

Route::get('/all-checkup/add', AddCheckup::class)->name('all-checkup.add');

Route::get('/all-checkup/edit/{checkup_id}', EditCheckup::class)->name('all-checkup.edit');