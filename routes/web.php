<?php

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

Route::get('/csv', function() {
    $table = \App\Task::all();
    $output='';
    foreach ($table as $row) {
        $row['desc'] =  str_replace("\n", ' ', strip_tags($row['desc']));
        $output.=  implode(";",$row->toArray()) . "\r\n";
    }
    $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="ExportTasks.csv"',
    );

    return Response::make(rtrim($output, "\r\n"), 200, $headers);
});
