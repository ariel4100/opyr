<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('empresas')->insert(array (
			0 => 
			array (
					'id'             => 1,
					'file_image'     => 'empresa__empresa.jpg',
					'descripcion_es' => 'OPyR ofrece servicios de venta, reparación y calibración de contadores de partículas, así como también, realizamos servicio de calificación y montaje de equipamiento para áreas blancas.
										Realizamos Calibración de contadores de partículas en aire y gases, como también calibración de generador de aerosoles, anemómetros y balómetros, 
										Somos especialistas en soporte técnico y nuestra misión es acompañar a nuestros clientes en sus necesidades y actividades. Estamos convencidos de que es un buen ejercicio trabajar de manera conjunta, para enriquecer los resultados.',
					'mision_es'      => 'Nuestra misión es acompañar a nuestros clientes en sus necesidades y actividades. Trabajamos de manera conjunta con nuestro equipo de profesionales para brindar el mejor servicio de atención. 
										Asumimos un compromiso de excelencia en la calidad de nuestros servicios y productos. Ofrecemos servicio de calidad, avalado por más de 10 años de experiencia y presencia.',
					'slogan_es'      => 'Máxima calidad, confiabilidad y seguridad de nuestros servicios',
					'mision_pt'      => 'Nossa missão é acompanhar nossos clientes em suas necessidades e atividades. Trabalhamos em conjunto com nossa equipe de profissionais para prestar o melhor serviço. Assumimos um compromisso com a excelência na qualidade de nossos serviços e produtos. Oferecemos um serviço de qualidade, apoiado por mais de 10 anos de experiência e presença.',
					'descripcion_pt' => 'Oferece serviços de venda, reparo e calibração de contadores de partículas, bem como, realizamos serviços de qualificação e montagem de equipamentos para áreas brancas. Realizamos a calibração de contadores de partículas em ar e gases, assim como calibração de aerossóis, anemômetros e balômetros, somos especialistas em suporte técnico e nossa missão é acompanhar nossos clientes em suas necessidades e atividades. Estamos convencidos de que é um bom exercício trabalhar juntos para enriquecer os resultados.',
					'slogan_pt'      => 'Máxima qualidade, confiabilidade e segurança dos nossos serviços',
			),
		));  
    }
}
