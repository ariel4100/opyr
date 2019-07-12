<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CondicionsTableSeeder::class);
        $this->call(LogosTableSeeder::class);
        $this->call(DatosTableSeeder::class);
        $this->call(MetadatosTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(InformacionsTableSeeder::class);
        $this->call(ServiciosTableSeeder::class);
        $this->call(TextosTableSeeder::class);
        $this->call(CategoriasTableSeeder::class);
        $this->call(NovedadsTableSeeder::class);
        $this->call(CalidadsTableSeeder::class);
        $this->call(FamiliasTableSeeder::class);
        $this->call(SubfamiliasTableSeeder::class);
    }
}
