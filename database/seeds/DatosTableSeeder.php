<?php

use Illuminate\Database\Seeder;

class DatosTableSeeder extends Seeder
{
		/**
		 * Run the database seeds.
		 *
		 * @return void
		 */
		public function run()
		{
			\DB::table('datos')->insert(array (
				0 =>
				array (
					'id'          => 1,
					'tipo'        => 'telefono_1',
					'descripcion' => '(54 11) 4116-0591',
					'status'      => 1,
				),
				1 =>
				array (
					'id'          => 2,
					'tipo'        => 'telefono_2',
					'descripcion' => '(54 11) 4116-0592',
					'status'      => 1,
				),
				2 =>
				array (
					'id'          => 3,
					'tipo'        => 'telefono_3',
					'descripcion' => '(54 11) 4750-3671',
					'status'      => 1,
				),
				3 =>
				array (
					'id'          => 4,
					'tipo'        => 'email',
					'descripcion' => 'info@opyr.com.ar',
					'status'      => 1,
				),
				4 =>
				array (
					'id'          => 5,
					'tipo'        => 'direccion',
					'descripcion' => 'Caseros 2720, B1678HKF Caseros, Buenos Aires',
					'status'      => 1,
				),
			));
		}
}
