<?php
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ImagenesController;

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
// rutas para el crud de clientes 
//Route::get('/clientes', 'ClientesController@index'); 
//Route::get('/clientes/create', 'ClientesController@create'); 
//Route::get('/clientes/store', 'ClientesController@store'); 

/** rutas para las vstas generales */
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('artesanias.index');
});


Route::get('/registrarte', function () {
    return view('registrarte');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/menu-admin', function () {
    return view('menu-admin');
});

Route::get('/usuarios', function () {
    return view('usuarios/usuarios');
});

Route::get('/contactoo', function () {
    return view('contactoo');
});

Route::get('/menucarrito', function () {
    return view('menucarrito');
});

Route::get('/stock', function () {
    return view('Mysql.stock');
});

Route::resource('Cliente', 'ClientesController');
Route::resource('Artesanias', 'ArtesaniasController');
Route::resource('User', 'UsersController');
Route::resource('mail', 'MailController');
Route::resource('Artesania', 'ImagenesController');
Route::resource('Artesania', 'StockController');
//Route::resource('usuarios', 'UsersController');


Route::get('/stock', 'StockController@index');
Route::get('/procedure', 'StockController@storeprocedure');
Route::get('/respaldo', 'StockController@show');
Route::get('/producto', 'ImagenesController@index');
Route::get('/usuarios', 'UsersController@index');
Route::get('/ajedrez', 'ImagenesController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contacto', 'ContactoController@index')->name('contactarme');
Route::post('/enviar', 'ContactoController@procesar')->name('enviar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');