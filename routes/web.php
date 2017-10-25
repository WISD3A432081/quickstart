<?php

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
Route::get('/', function () {
    return view('tasks');
});
use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => 'web'], function () {

    /**
     * 顯示所有任務
     */
    Route::get('/', function () {
        //
    });

    /**
     * 增加新的任務
     */
    Route::post('/task', function (Request $request) {
        //
    });

    /**
     * 刪除任務
     */
    Route::delete('/task/{task}', function (Task $task) {
        //
    });
});