<?php

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  		\DB::table('servicios')->insert(array (
	  		0 =>
			array (
				'id'             => 1,
				'file_image'     => 'servicios__servicio1.jpg',
				'descripcion_es' => 'Centro de diagnóstico y análisis de partículas',
				'descripcion_pt' => 'Centro de diagnóstico e análise de partículas',
				'orden'          => 'aa',
	  		),
	  		1 =>
	  		array (
				'id'             => 2,
				'file_image'     => 'servicios__servicio2.jpg',
				'descripcion_es' => 'Estudio de particulado por tecnología láser',
				'descripcion_pt' => 'Estudo de partículas por tecnologia laser',
				'orden'          => 'bb',
	  		),
	  		2 =>
	  		array (
				'id'             => 3,
				'file_image'     => 'servicios__servicio3.jpg',
				'descripcion_es' => 'Recuento partículas',
				'descripcion_pt' => 'Contagem de partículas',
				'orden'          => 'cc',
	  		),
	  		3 =>
	  		array (
				'id'             => 4,
				'file_image'     => 'servicios__servicio4.jpg',
				'descripcion_es' => 'Análisis y evolución de estado de los sistemas',
				'descripcion_pt' => 'Análise e evolução do estado dos sistemas',
				'orden'          => 'dd',
	  		),
	  		4 =>
	  		array (
				'id'             => 5,
				'file_image'     => 'servicios__servicio5.jpg',
				'descripcion_es' => 'Control de sistemas de agua pura y de generación de agua para inyectables',
				'descripcion_pt' => 'Controle de sistemas de água pura e geração de água para injetáveis',
				'orden'          => 'ee',
	  		),
	  		5 =>
	  		array (
				'id'             => 6,
				'file_image'     => 'servicios__servicio6.jpg',
				'descripcion_es' => 'Control de nivel de contaminación particulada en envases',
				'descripcion_pt' => 'Controle do nível de contaminação por partículas em contêineres',
				'orden'          => 'ff',
	  		),
	  	));    
  	}
}
