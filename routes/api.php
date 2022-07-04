<?php
use App\Models\Employeer;
use App\Http\Controllers\EmployeerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/employeers', [EmployeerController::class, 'index']);
Route::post('/employeers', [EmployeerController::class, 'store']);
Route::put('/employeers/{employeer}', [EmployeerController::class, 'update']);
Route::delete('/employeers/{employeer}', [EmployeerController::class, 'destroy']);