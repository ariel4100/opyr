<?php

use Illuminate\Database\Seeder;

class MetadatosTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('metadatos')->insert(array (
  			0 =>
  			array (
  				'id'          => 1,
  				'url'         => '/',
          'seccion_es'     => 'Home',
          'seccion_pt'     => 'Home',
          'keyword_es'     => 'home',
          'keyword_pt'     => 'home',
          'descripcion_es' => 'Página principal',
  				'descripcion_pt' => 'Home'
  			),
  			1 =>
  			array (
  				'id'          => 2,
  				'url'         => '/empresa',
          'seccion_es'     => 'Empresa',
          'seccion_pt'     => 'Empresa',
          'keyword_es'     => 'empresa',
          'keyword_pt'     => 'empresa',
          'descripcion_es' => 'Descripción de la empresa',
  				'descripcion_pt' => 'Descrição da empresa',
  			),
  			2 =>
  			array (
  				'id'          => 3,
  				'url'         => '/productos',
          'seccion_es'     => 'Productos',
          'seccion_pt'     => 'Productos',
          'keyword_es'     => 'productos',
          'keyword_pt'     => 'productos',
          'descripcion_es' => 'Catálogo de Productos',
  				'descripcion_pt' => 'Catálogo de produtos',
  			),
  			3 =>
  			array (
  				'id'          => 4,
  				'url'         => '/servicios',
          'seccion_es'     => 'Servicios',
          'seccion_pt'     => 'Serviços',
          'keyword_es'     => 'servicios',
          'keyword_pt'     => 'Serviços',
          'descripcion_es' => 'Servicios brindados por la empresa.',
  				'descripcion_pt' => 'Serviços prestados pela empresa.',
  			),
        4 =>
        array (
          'id'          => 5,
          'url'         => '/distribuidores',
          'seccion_es'     => 'Distribuidores',
          'seccion_pt'     => 'Distribuidores',
          'keyword_es'     => 'distribuidores',
          'keyword_pt'     => 'distribuidores',
          'descripcion_es' => 'Distribuidores de la empresa.',
          'descripcion_pt' => 'Distribuidores da empresa.',
        ),
  			5 =>
  			array (
  				'id'          => 6,
  				'url'         => '/calidad',
          'seccion_es'     => 'Calidad',
          'seccion_pt'     => 'Qualidade',
          'keyword_es'     => 'calidad',
          'keyword_pt'     => 'qualidade',
          'descripcion_es' => 'Certificados de calidad.',
  				'descripcion_pt' => 'Certificados de qualidade.',
  			),
  			5 =>
  			array (
  				'id'          => 6,
  				'url'         => '/contacto',
          'seccion_es'     => 'Contacto',
          'seccion_pt'     => 'Entre em contato',
          'keyword_es'     => 'contacto',
          'keyword_pt'     => 'entre em contato',
          'descripcion_es' => 'Zona de contacto',
  				'descripcion_pt' => 'Área de contato',
  			),
  		));
    }
}
