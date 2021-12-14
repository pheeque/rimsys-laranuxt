<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
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

Route::get('/', [Controller::class, 'routes'])
    ->name('route information')
    ->withoutMiddleware('api');
Route::get('example', [Controller::class, 'example'])->name('example route');
Route::get('error', [Controller::class, 'error'])->name('error route');

Route::prefix('experiences')->group(function () {

    Route::get('/', [ExperienceController::class, 'index']);

    Route::delete('{experience}', [ExperienceController::class, 'destroy']);

    Route::post('add', [ExperienceController::class, 'store']);

});

Route::prefix('education')->group(function () {

    Route::get('/', [EducationController::class, 'index']);

    Route::delete('{education}', [EducationController::class, 'destroy']);

    Route::post('add', [EducationController::class, 'store']);

});

Route::prefix('skills')->group(function () {

    Route::get('/', [SkillController::class, 'index']);

    Route::delete('{skill}', [SkillController::class, 'destroy']);

    Route::post('add', [SkillController::class, 'store']);

});
