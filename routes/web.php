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
Route::get('setlocale/{locale}', function ($locale) {
	if (in_array($locale, \Config::get('app.locales'))) {
	  Session::put('locale', $locale);
	}
	return redirect()->back();
  });

Route::get('/', 'SeccionHomeController@index');
Route::get('/search', 'SeccionHomeController@buscador')->name('buscador');
Route::get('empresa', 'SeccionEmpresaController@index');
Route::get('calidad', 'SeccionCalidadController@index');
Route::get('servicios', 'SeccionServicioController@index');
Route::get('distribuidores', 'SeccionDistribuidoresController@index');

Route::prefix('productos')->group(function () { 
	Route::get('/', 'SeccionProductoController@index')->name('productos');
	Route::get('/familia/{familia}/subfamilias', 'SeccionProductoController@show')->name('productos.subfamilias');
	Route::get('/familia/{familia}/subfamilias/{subfamilia}/productos', 'SeccionProductoController@showsubf')->name('productos.prod');
	Route::get('/{producto}', 'SeccionProductoController@showprod')->name('producto');
 });

//Sección CONTACTO
Route::resource('/contacto', 'SeccionContactoController');

//Sección de Novedades
Route::get('/novedades', 'SeccionNovedadesController@index');
Route::get('/novedades/filtros/{id}', 'SeccionNovedadesController@filter')->name('filtros');
Route::get('/novedades/ver/{id}', 'SeccionNovedadesController@ver')->name('ver');

	//Producto-Descarga
	Route::get('/calidadDown/{file}', function ($file) {
		return Storage::download("descargas/$file");
	})->name('calidad-down');

    //PRIVADA-Descarga
    Route::get('/privadaDown/{file}', function ($file) {
        return Storage::download("descargas/$file");
    })->name('privada-down');

Auth::routes();

Route::prefix('privada')->middleware('auth')->group(function () { 
	Route::get('/', 'PrivateZoneController@index')->name('privada');
	Route::get('/informacion-general', 'PrivateZoneController@general')->name('privada.descargas');

 });

Route::prefix('adm')->group(function () {

	//Rutas para la gestión de usuarios administrativos
	Route::get('home', 'AdminController@index')->name('admin.dashboard');
	Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
	Route::get('admin/register', 'AdminController@create')->name('admin.register');
	Route::post('admin/register', 'AdminController@store')->name('admin.register.store');
	Route::get('/', 'Auth\Admin\LoginController@login')->name('admin.auth.login');
	Route::post('login', 'Auth\Admin\LoginController@loginAdmin')->name('admin.auth.loginAdmin');
	Route::post('logout', 'Auth\Admin\LoginController@logout')->name('admin.auth.logout');
	Route::get('admin/listar', 'AdminController@listar');
	Route::get('admin/edit/{id}', 'AdminController@edit');
	Route::put('admin/update/{id}', 'AdminController@update');
	Route::get('admin/eliminar/{id}', 'AdminController@eliminar');

	//Ruta para la gestión de sliders
	Route::get('{seccion}/slider/', 'SliderController@index');
	Route::get('{seccion}/slider/crear/', 'SliderController@create');
	Route::post('{seccion}/slider', 'SliderController@store');
	Route::get('{seccion}/slider/edit/{id}', 'SliderController@edit');
	Route::put('{seccion}/slider/update/{id}', 'SliderController@update');
	Route::get('slider/delete/{id}', 'SliderController@eliminar');

	
	//Ruta para la gestión de logos
	Route::resource('general/condiciones', 'CondicionController');
	
	//Ruta para la gestión de logos
	Route::resource('logos', 'LogoController');
	
	//Ruta para la gestión de Redes Sociales
    Route::get('social/index', 'SocialController@index')->name('social');
    Route::put('social/actualizar/{id}', 'SocialController@update')->name('social.update');


    //Ruta para la gestión de Control
    Route::get('control/index', 'ControlController@index')->name('control');
    Route::put('control/actualizar/{id}', 'ControlController@update')->name('control.update');

	//Ruta para la gestión de metadatos
	Route::resource('metadatos', 'MetadatoController');
	
    // Admin Calidad
	Route::prefix('calidad')->group(function () {
		//Calidad
		Route::resource('/index', 'CalidadController');		
		
	//Descargas de Calidad
		Route::resource('/descargas', 'DescargaController');
		Route::get('delete/{id}', 'DescargaController@eliminar');
	});

	Route::prefix('privada')->group(function () {
		Route::get('/', 'PrivadaController@index')->name('privada.adm');
		Route::get('/create', 'PrivadaController@create');
		Route::post('/store', 'PrivadaController@store');
        Route::get('/edit/{id}', 'PrivadaController@edit');
        Route::put('/update/{id}', 'PrivadaController@update');
        Route::get('delete/{id}', 'PrivadaController@eliminar');
        Route::get('/cliente', 'ClienteController@index')->name('privada.cliente');
        Route::get('/cliente/crear', 'ClienteController@create');
        Route::post('/cliente/registrar', 'ClienteController@store');
        Route::get('/cliente/editar/{id}', 'ClienteController@edit');
        Route::put('/cliente/actualizar{id}', 'ClienteController@update')->name('cliente.update');
        Route::get('/cliente/eliminar/{id}', 'ClienteController@eliminar');
    });


    //Ruta para la gestión de usuarios
	Route::prefix('empresa/')->group(function () {
		Route::resource('index', 'EmpresaController');
	});

	
	Route::prefix('productos')->group(function () {

		Route::resource('/index', 'ProductoController');
		Route::get('/select/subfamilias', 'ProductoController@subfamilias');
		Route::get('/delete/{id}', 'ProductoController@eliminar');

		Route::resource('familias', 'FamiliaController');
		Route::get('familias/delete/{id}', 'FamiliaController@eliminar');

		Route::resource('subfamilias', 'SubfamiliaController');
		Route::get('subfamilias/delete/{id}', 'SubfamiliaController@eliminar');


		Route::get('galeria/{producto}', 'ProductoController@galeriaCreate');
		Route::post('galeria/store', 'ProductoController@galeriaStore');
		Route::get('galeria/view/{producto}', 'ProductoController@galeriaView');
		Route::get('galeria/delete/{id}', 'ProductoController@galeriaDelete');
		Route::get('galeria/edit/{id}', 'ProductoController@galeriaEdit');
		Route::put('galeria/{id}', 'ProductoController@galeriaUpdate');

	});


	

// Admin Novedades
	Route::prefix('novedades')->group(function () {
		Route::resource('/index', 'NovedadController');	
		Route::get('delete/{id}', 'NovedadController@eliminar');	
		
		Route::resource('/categorias', 'CategoriaController');
		Route::get('/categorias/delete/{id}', 'CategoriaController@eliminar');
	});


	// Admin Servicios
	Route::prefix('servicios/')->group(function () {
		Route::resource('servicio', 'ServicioController')->except(['show']);
		Route::get('delete/{id}', 'ServicioController@eliminar');
	});

	//Ruta para la gestión de contacto y redes
	Route::prefix('datos')->group(function () {
		Route::get('contacto', 'DatoController@contacto');
		Route::get('contacto/edit/{id}', 'DatoController@editContacto');
		Route::get('redes', 'DatoController@redes');
		Route::get('redes/edit/{id}', 'DatoController@editRedes');
		Route::put('update/{id}', 'DatoController@update');
	});


});