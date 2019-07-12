<?php

use Illuminate\Database\Seeder;

class TextosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('textos')->insert(array (
            0 => 
            array (
				'id'        => 1,
				'ubicacion' => 'texto-servicios',
				'texto1_es' => 'Servicio llave en mano',
				'texto2_es' => 'Contamos con un equipo de profesionales capacitados y con alta experiencia en el rubro. Nos dedicamos a brindar  un servicio integral y asesoramiento personalizado adecuado a las necesidades propias de nuestros clientes.',
				'texto1_pt' => 'Serviço chave na mão',
				'texto2_pt' => 'Temos uma equipe de profissionais treinados com alta experiência no campo. Dedicamo-nos a fornecer um serviço abrangente e aconselhamento personalizado adequado às necessidades dos nossos clientes.',
            ),
        ));
    }
}
