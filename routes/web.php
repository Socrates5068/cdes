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

//use Illuminate\Routing\Route;

Route::get('/', 'RoutesController@home')->name('pages.index');
Route::get('sedes/antecedentes', 'RoutesController@antecedentes')->name('pages.antecedentes');
Route::get('sedes/autoridades', 'RoutesController@autoridades')->name('pages.autoridades');
Route::get('sedes/mision', 'RoutesController@mision')->name('pages.mision');
Route::get('sedes/telefonosip', 'RoutesController@telefonosip')->name('pages.telefonosip');
Route::get('sedes/organigrama', 'RoutesController@organigrama')->name('pages.organigrama');

Route::get('unidad/administrativa', 'RoutesController@administrativa')->name('pages.administrativa');
Route::get('unidad/auditoria', 'RoutesController@auditoria')->name('pages.auditoria');
Route::get('unidad/epidemiologia', 'RoutesController@epidemiologia')->name('pages.epidemiologia');
Route::get('unidad/juridica', 'RoutesController@juridica')->name('pages.juridica');
Route::get('unidad/direccion', 'RoutesController@direccion')->name('pages.direccion');
Route::get('unidad/planificacion', 'RoutesController@planificacion')->name('pages.planificacion');
Route::get('unidad/redes', 'RoutesController@redes')->name('pages.redes');
Route::get('unidad/promocion', 'RoutesController@promocion')->name('pages.promocion');
Route::get('unidad/seguros', 'RoutesController@seguros')->name('pages.seguros');

Route::get('covidpais', 'CovidController@porpais')->name('covid.pais');
Route::get('covidregion', 'CovidController@porregion')->name('covid.region');


Route::get('articulos', 'RoutesController@articles')->name('pages.articles');
Route::get('contacto', 'RoutesController@contacto')->name('pages.contacto');
Route::get('galeria', 'RoutesController@galery')->name('pages.galeria');
Route::get('documentos', 'RoutesController@documentos')->name('pages.documentos');




Route::get('noticia/{post}', 'PostsController@show')->name('posts.show');
Route::get('noticias', 'PostsController@index')->name('posts.index');
Route::get('buscar', 'PostsController@busqueda')->name('posts.buscar');
Route::get('categorias/{category}', 'CategoriesController@show')->name('categories.show');
Route::get('tags/{tag}', 'TagsController@show')->name('tags.show');

Route::group(['prefix' => 'admin',
              'namespace' => 'Admin',
              'middleware' => 'auth'],
    function(){
        Route::get('/', 'AdminController@index')->name('dashboard');

        Route::resource('posts', 'PostsController', ['except' => 'show', 'as' => 'admin']);
        Route::resource('users', 'UsersController', ['as' => 'admin']);
        Route::middleware('role:Admin')
            ->put('users/{user}/roles', 'UsersRolesController@update')
            ->name('admin.users.roles.update');
        Route::middleware('role:Admin')
            ->put('users/{user}/permissions', 'UsersPermissionsController@update')
            ->name('admin.users.permissions.update');
        Route::resource('students', 'StudentsController', ['as' => 'admin']);

        Route::post('posts/{post}/photos', 'PhotosController@store')->name('admin.posts.photos.store');
        Route::delete('photos/{photo}', 'PhotosController@destroy')->name('admin.photos.destroy');

        //Images
        Route::resource('images', 'ImageController', ['except' => 'show', 'as' => 'admin']);
        Route::resource('documents', 'DocumentController', ['except' => 'show', 'as' => 'admin']);
});

//Denuncias Routes
Route::get('/denuncias', 'DenunciaController@index')->name('denuncias.index');
Route::get('/denuncias/vista', 'DenunciaController@vista')->name('denuncias.vista');
Route::get('/denuncias/create', 'DenunciaController@create')->name('denuncias.create');
Route::post('/denuncias', 'DenunciaController@store')->name('denuncias.store');
Route::get('/denuncias/pdf', 'DenunciaController@pdf')->name('pdf.index');
Route::get('/denuncias/buscar', 'DenunciaController@buscar')->name('denuncias.buscar'); //Busqueda mediante coindencias del texto ingresado
Route::get('/denuncias/buscar2', 'DenunciaController@buscar2')->name('denuncias.buscar2'); //Buscar una sola denuncia basado en el id
Route::get('/denuncias/{denuncia}', 'DenunciaController@show')->name('denuncias.show');
Route::get('/buscardenuncia', 'DenunciaController@show2')->name('denuncias.show2');
Route::get('/denuncias/{id}/editar', 'DenunciaController@leido')->name('denuncias.leido');

Route::view('/pruebas', 'pruebas');
Route::post('/denimg/store', 'DenimgController@store')->name('denimg.store');
Route::post('/denimg/destroy', 'DenimgController@destroy')->name('denimg.destroy');

Route::get('/datos', function () { return view('datos.datos'); });

Route::get('/requisitosrsssro', function () { return view('datos.rSSSRO'); });
Route::get('/requisitosinforme', function () { return view('datos.informe'); });
Route::get('/requisitosresolucion', function () { return view('datos.resolucion'); });
Route::get('/audienciafinal', function () { return view('datos.audiencia'); });

Route::get('/pdf', function () {
    return view('datos.pdf');
});







// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');