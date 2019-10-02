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

//Aula Frameworks 3

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/ola', function () {
    return view('welcomename', ['name' => 'Carmo']);
});

Route::get('/contacto1', function () {
    return view('contactoform');
});

/*Route::get('/contacto2', function () {
    return view('contacto.form');
});*/ 


Route::get('/testTemplate', function () {
    return view('testTemplate', ['nome' => 'Carmo']);
}); 

/*
Route::get('/news', function () {
    return "Sítio de Notícias";
});


Route::get('/contacto', function () {
    return "Sítio de Contacto";
}); */ 


//exercicio aula frameworks 3

//mesmo url /search views diferentes!!

Route::get('/search', function () {
  
   return view('search');  
 
}); 


Route::post('/search', function () {

    
    return view('searchresult', ['texto'=>$_POST['q']]);
}); 

//Aula frameworks 4

//extend layouts
Route::get('/contacto2', function () {
    return view('contacto.form');
});


//Using Compact

Route::get('/news4', function () {

    $links = ["Desporto", "Porto", "Aveiro"];
    return view('news4', compact("links"));
});

//passar parametros para a função

Route::get('/news4/{title}', function ($title) {
    $links = ["Desporto","Porto","Aveiro"];
    return view('newstitle', ["links" => $links, "title" => $title]);
});

//make a controller: php artisan make:controller NoticiasController! Mesmo exercício que anterior mas agora usa controller

Route::get('/noticias', "NoticiasController@index");







