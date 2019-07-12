<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('sliders')->insert(array (
			0 => 
			array (
				'id'             => 1,
				'file_image'     => 'sliders__slider1.jpg',
				'seccion'        => 'home',
				'titulo_es'      => 'SUMINISTRO INTEGRAL',
				'descripcion_es' => 'Optimización de Procesos y Recursos',
				'titulo_pt'      => 'FORNECIMENTO ABRANGENTE',
				'descripcion_pt' => 'Otimização de Processos e Recursos',
				'orden'          => 'aa',
			),
			1 => 
			array (
				'id'             => 2,
				'file_image'     => 'sliders__slider2.jpg',
				'seccion'        => 'empresa',
				'titulo_es'      => 'SERVICIO DE EXCELENCIA',
				'descripcion_es' => 'Análisis y Calibración de Partículas',
				'titulo_pt'      => 'SERVIÇO DE EXCELÊNCIA',
				'descripcion_pt' => 'Análise e Calibração de Partículas',
				'orden'          => 'aa',
			),
		));    
    }
}
