<?php

use Illuminate\Database\Seeder;

class InformacionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('informacions')->insert(array (
            0 => 
            array (
				'id'             => 1,
				'file_image'     => 'home__informacions.jpg',
				'titulo_es'      => 'Partículas OPyR',
				'descripcion_es' => 'OPyR ofrece servicios de venta, reparación y calibración; así como también, servicio de calificación y equipamiento. Somos especialistas en soporte técnico y nuestra misión es acompañar a nuestros clientes en sus necesidades y actividades',
				'titulo_pt'      => 'Partículas OPyR',
				'descripcion_pt' => 'OPyR oferece serviços de vendas, reparo e calibração; bem como serviço de qualificação e equipamentos. Somos especialistas em suporte técnico e nossa missão é acompanhar nossos clientes em suas necessidades e atividades',
            ),
        ));
    }
}
