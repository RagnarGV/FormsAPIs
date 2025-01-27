<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::post('save', [FormController::class, 'saveForm']);
Route::get('/forms/{id}', [FormController::class, 'getForm']);
Route::put('/update/{id}', [FormController::class, 'updateForm']);
Route::delete('/delete/{id}', [FormController::class, 'deleteForm']);
Route::get('/list', [FormController::class, 'listForms']);
Route::get('/sanctum/csrf-cookie', function () {
    return response()->json(['csrfToken' => csrf_token()]);
});
