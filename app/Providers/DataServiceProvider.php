<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DataServiceProvider extends ServiceProvider
{
/**
 * Bootstrap services.
 *
 * @return void
 */
public function boot()
{
	view()->composer(['adm.layouts.sidebar', 
						'adm.auth.login',
						'adm.layouts.navbar',
						'layouts.navbar', 'page.privada*'
					], function ($view) {
						$logos = \App\Logo::where('ubicacion', 'navbar')->first();
						$idioma = \App::getLocale();
						$view->with(compact('logos', 'idioma'));
					});

     view()->composer(['app'], function ($view) {
						$idioma = \App::getLocale();
						$view->with(compact('idioma'));
				    });

	view()->composer(['layouts.footer',
					], function ($view) {
						$logos = \App\Logo::where('ubicacion', 'footer')->first();
						$view->with(compact('logos'));
					});

	view()->composer(['layouts.footer', 
					'page.contacto.index', 
					'layouts.navbar', 'page.privada*'
					], function ($view) {
						$telefono_1 = \App\Dato::where('tipo', 'telefono_1')->first();
						$telefono_2 = \App\Dato::where('tipo', 'telefono_2')->first();
						$telefono_3 = \App\Dato::where('tipo', 'telefono_3')->first();
						$email      = \App\Dato::where('tipo', 'email')->first();
						$direccion  = \App\Dato::where('tipo', 'direccion')->first();

						$view->with(compact('email', 'telefono_1','telefono_2','telefono_3', 'direccion'));
					});
}




/**
 * Register services.
 *
 * @return void
 */
public function register()
{
    //
}
}
