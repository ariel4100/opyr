<?php

use Illuminate\Database\Seeder;

class FamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('familias')->insert(array (
			0 => 
			array (
                'id'         => 1,
                'nombre_es'  => 'Ninguna',
                'nombre_pt'  => 'Não',
                'orden'      => 'aa',
                'file_image' => null
			)
		));
    }
}
