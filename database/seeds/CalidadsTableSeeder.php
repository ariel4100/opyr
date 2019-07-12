<?php

use Illuminate\Database\Seeder;

class CalidadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('calidads')->insert(array (
			0 => 
			array (
				'id'       => 1,
				'texto_es' => 'Nuestro compromiso ha sido y será siempre la calidad de nuestro catálogo de productos y de nuestros servicios brindados.
Nuestros productos son perfectos para realizar servicios profesionales, acordes a las últimos requerimientos. En OPyR contamos con un servicio completo de BIO-DESCONTAMINACIÓN, con la más alta calidad y experiencia otorgando un alto nivel de limpieza. Ofrecemos servicio de calidad, avalado por más de 10 AÑOS de experiencia y presencia en el mercado',
				'texto_pt' => 'Nosso compromisso tem sido e sempre será a qualidade de nosso catálogo de produtos e nossos serviços prestados.
Nossos produtos são perfeitos para serviços profissionais, de acordo com os mais recentes requisitos. No OPyR temos um serviço completo de BIO-DESCONTAMINAÇÃO, com a mais alta qualidade e experiência, proporcionando um alto nível de limpeza. Oferecemos um serviço de qualidade, apoiado por mais de 10 ANOS de experiência e presença no mercado.',
				'titulo_es' => 'Más de una década de experiencia y presencia en el mercado',
				'titulo_pt' => 'Mais de uma década de experiência
e presença no mercado',
			),
		));
    }
}
