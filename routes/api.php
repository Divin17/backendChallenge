<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\LaboratoryTestTypeController;
use App\Http\Controllers\MedicalRecordController;
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

Route::middleware('auth:sanctum')->group(
    function () {
        Route::apiResource(
            'laboratory_test_types',
            LaboratoryTestTypeController::class
        )->only(['index']);
        Route::apiResource(
            'medical_record',
            MedicalRecordController::class
        )->only(['show', 'store', 'update']);
        Route::post('/logout', [AuthenticationController::class, 'logout']);
    }
);
Route::post('/login', [AuthenticationController::class, 'login']);
