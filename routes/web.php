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

$data = [];
$lunga = [];
$corta = [];
$cortissima = [];

foreach($data as $pasta){
    if($pasta['tipo'] == 'lunga'){
        $lunga[] = $pasta;
    }elseif($pasta['tipo'] == 'corta'){
        $corta[] = $pasta;
    }elseif($pasta['tipo'] == 'cortissima'){
        $cortissima[] = $pasta;
    }
}

Route::get('/', function () {
    return view('home', [
        'lunghe' => $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima
    ]);
});
