<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'nombre' => 'diseño de aplicaciones web',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'desarrollo de aplicaciones en plataforma iOS',
        ]);

        DB::table('materias')->insert([
            'nombre' => 'diseño de experimentos'
        ]);
    }
}
