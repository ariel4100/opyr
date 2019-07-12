<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 =>
            array (
                'id'       => 1,
                'name'     => 'Pablo Cabañuz',
                'username' => 'pablo',
                'email'    => 'pcabanuz@osole.es',
                'telefono' => '11 5977 4803',
                'social'   => 'OSOLE - Consultoría de Internet',
                'password' => Hash::make('pablopablo'),
            ),
        ));
    }
}
