<?php

    use App\Models\Dealer;
    use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dealerController;

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
    $data = Dealer::all();
    return view('home',[
        'values' => $data
    ]);
});

/*
 * Form Resource Route
*/
Route::resource('dealerForm', dealerController::class);
/*
 * Download Dealer
 */
Route::get('download', 'App\Http\Controllers\excelDownload@dealerDownload')->name('download');
