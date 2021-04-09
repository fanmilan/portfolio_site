<?php

use App\Http\Controllers\API\MailController;
use App\Http\Controllers\API\IdeaController;
use App\Http\Controllers\API\FrontEditorController;
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

/*Route::middleware('auth:api')->group( function () {
    Route::resource('mails', MailController::class);
});*/


Route::apiResource('mails', MailController::class);
Route::apiResource('ideas', IdeaController::class);


Route::get('front_editor/front', [FrontEditorController::class, 'getBlocksForFront']);
Route::put('front_editor/front', [FrontEditorController::class, 'updateFrontBlocks']);
Route::apiResource('front_editor', FrontEditorController::class);
