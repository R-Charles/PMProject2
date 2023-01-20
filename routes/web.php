<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Record;

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

// All Records
Route::get('/', function () {
    return view('records', [
        'heading' => 'Latest Records',
        'records' => Record::all()
    ]);
});

// Single Record
Route::get('/records/{id}', function($id) {
    return view('record', [
        'record' => Record::find($id)
    ]);
});

// Route::get('/', function () {
//     return view('records', [
//         'heading' => 'Latest Records',
//         'records' => [
//             [
//                 'id' => 1,
//                 'title' => 'Record One',
//                 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus placeat magnam mollitia dolor neque doloribus pariatur nulla! Tempore, ad! Accusantium animi ad esse rem exercitationem sequi quisquam modi laudantium fugiat!'
//             ],
//             [
//                 'id' => 2,
//                 'title' => 'Record Two',
//                 'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus placeat magnam mollitia dolor neque doloribus pariatur nulla! Tempore, ad! Accusantium animi ad esse rem exercitationem sequi quisquam modi laudantium fugiat!'
//             ]
//         ]
//     ]);
// });
