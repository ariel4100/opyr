<?php

use Illuminate\Database\Seeder;

class NovedadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('novedads')->insert(array (
			0 => 
			array (
				'id'           => 1,
				'file_image'   => 'novedades__novedad1.jpg',
				'titulo_es'    => 'Novedad',
				'texto_es'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a ut deserunt harum officiis mollitia expedita animi, ipsa minus. Libero, voluptatibus. Omnis dolorem voluptatum quo similique modi sunt vero ut!',
				'titulo_pt'    => 'Novidade',
				'texto_pt'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae numquam illo provident culpa esse ducimus perspiciatis tempora nulla doloremque, inventore aperiam iste id, laudantium optio reprehenderit consequatur cum soluta debitis. ',
				'file_image'   => 'novedades__novedad1.jpg',
				'orden'        => 'aa',
				'categoria_id' => 1
			),
			1 => 
			array (
				'id'           => 2,
				'titulo_es'    => 'Novedad',
				'texto_es'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a ut deserunt harum officiis mollitia expedita animi, ipsa minus. Libero, voluptatibus. Omnis dolorem voluptatum quo similique modi sunt vero ut!',
				'titulo_pt'    => 'Novidade',
				'texto_pt'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae numquam illo provident culpa esse ducimus perspiciatis tempora nulla doloremque, inventore aperiam iste id, laudantium optio reprehenderit consequatur cum soluta debitis. ',
				'file_image'   => 'novedades__novedad2.jpg',
				'orden'        => 'bb',
				'categoria_id' => 2
			),
			2 => 
			array (
				'id'           => 3,
				'titulo_es'    => 'Novedad',
				'texto_es'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat a ut deserunt harum officiis mollitia expedita animi, ipsa minus. Libero, voluptatibus. Omnis dolorem voluptatum quo similique modi sunt vero ut!',
				'titulo_pt'    => 'Novidade',
				'texto_pt'     => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae numquam illo provident culpa esse ducimus perspiciatis tempora nulla doloremque, inventore aperiam iste id, laudantium optio reprehenderit consequatur cum soluta debitis. ',
				'file_image'   => 'novedades__novedad3.jpg',
				'orden'        => 'cc',
				'categoria_id' => 2
			),
		));
    }
}
