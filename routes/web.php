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

    $data = config('paste');
    $info = config('info');
    $pastifici = config('pastifici');
    $collezioni = config('collezioni');
    $prodotti = config('prodotti');
    
    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach($data as $key => $pasta){

        $pasta['id'] = $key;

        if($pasta['tipo'] == 'lunga'){
            $lunga[] = $pasta;
        }elseif($pasta['tipo'] == 'corta'){
            $corta[] = $pasta;
        }elseif($pasta['tipo'] == 'cortissima'){
            $cortissima[] = $pasta;
        }
    }

    return view('home', [
        'lunghe' => $lunga,
        'corte' => $corta,
        'cortissime' => $cortissima,
        'info' => $info,
        'pastificio' => $pastifici,
        'collezione' => $collezioni,
        'prodotto' => $prodotti
    ]);
})->name('homepage');

Route::get('/ultime-notizie', function () {
    $info = config('info');
    $pastifici = config('pastifici');
    $collezioni = config('collezioni');
    $prodotti = config('prodotti');

    return view('news', [
        'info' => $info,
        'pastificio' => $pastifici,
        'collezione' => $collezioni,
        'prodotto' => $prodotti
    ]);
})->name('news');

Route::get('prodotto/{id}', function($id){
    $data = config('paste');
    $info = config('info');
    $pastifici = config('pastifici');
    $collezioni = config('collezioni');
    $prodotti = config('prodotti');

    if($id >= count($data)){
        abort(404);
    }

    $pasta = $data[$id];

    return view('prodotto', [
        'pasta' => $pasta,
        'info' => $info,
        'pastificio' => $pastifici,
        'collezione' => $collezioni,
        'prodotto' => $prodotti
    ]);
})->where('id', '[0-9]+')->name('prodotto');