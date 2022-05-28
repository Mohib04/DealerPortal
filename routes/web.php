<?php

    use App\Models\Dealer;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\dealerController;
    use App\Http\Controllers\DashboardController;


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

Route::get('/', 'App\Http\Controllers\DealerHome@index');
Route::get('/all/dealer', 'App\Http\Controllers\DealerHome@AllDealer');

/*
 * Form Resource Route
*/
Route::resource('dealerForm', dealerController::class);

/*
 * Update dealer
 */
Route::post('dealer/update/{id}',[dealerController::class, 'uDealer']);
/*
 *   Delete dealer
 */
Route::get('dealer/delete/{id}',[dealerController::class, 'dDelete']);
/*
 * Export Dealer
 */
Route::get('download', 'App\Http\Controllers\excelDownload@dealerDownload')->name('download');
/*
 * Import Dealer
 */
Route::get('dealer/import', 'App\Http\Controllers\excelDownload@dealerImport');
Route::post('import', 'App\Http\Controllers\excelDownload@Import');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $data = Dealer::all();
    return view('dashboard', compact('data'));
})->name('dashboard');

//BackEnd
Route::get('logout', [DashboardController::class, 'logout']);
