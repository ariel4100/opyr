<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('categorias')->insert(array (
			0 => 
			array (
				'id'        => 1,
				'nombre_es' => 'Eventos',
				'nombre_pt' => 'Eventos',
				'orden'     => 'aa',
			),
			1 => 
			array (
				'id'        => 2,
				'nombre_es' => 'Productos',
				'nombre_pt' => 'Produtos',
				'orden'     => 'bb',
			),
			2 => 
			array (
				'id'        => 3,
				'nombre_es' => 'Empresa',
				'nombre_pt' => 'Negócios',
				'orden'     => 'cc',
			),
		));
    }
}
