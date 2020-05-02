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

Route::get('/', 'TaskController@preview');

Route::get('/csv', function() {
    $table = \App\Task::all()->sortBy('task_id')->reverse()->take(500)->values();
    $output='';
    foreach ($table as $row) {
        $row['anons'] =  str_replace("\n", ' ', strip_tags($row['anons']));
        $row['desc'] =  str_replace("\n", ' ', strip_tags($row['desc']));
        $output.=  implode(";",$row->toArray()) . "\r\n";
    }
    $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="ExportTasks.csv"',
    );

    //return $output;

    return Response::make(rtrim($output, "\r\n"), 200, $headers);
});

Route::get('/csv/all', function() {
    $table = \App\Task::all();
    $output='';
    foreach ($table as $row) {
        $row['anons'] =  str_replace("\n", ' ', strip_tags($row['anons']));
        $row['desc'] =  str_replace("\n", ' ', strip_tags($row['desc']));
        $output.=  implode(";",$row->toArray()) . "\r\n";
    }
    $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="ExportTasks.csv"',
    );

    //return $output;

    return Response::make(rtrim($output, "\r\n"), 200, $headers);
});

Route::post('/deploy', 'DeployController@deploy');
Route::post('/test', 'DeployController@deploy1');

