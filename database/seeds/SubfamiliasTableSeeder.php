<?php

use Illuminate\Database\Seeder;

class SubfamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('subfamilias')->insert(array (
			0 => 
			array (
				'id'         => 1,
				'nombre_es'  => 'Ninguna',
				'nombre_pt'  => 'Não',
				'orden'      => 'aa',
				'familia_id' => 1,
				'file_image' => null,
			)
		));
    }
}
