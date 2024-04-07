<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

class CalificacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calificacions')->insert([
            'actividad' => 'actividad 1',
            'tipo' => 'actividad',
            'calificacion' => '95',
            'materiaId' => '1',
            'estudianteId' => '1',
            'profesorId' => '2',
        ]);

        DB::table('calificacions')->insert([
            'actividad' => 'actividad 2',
            'tipo' => 'actividad',
            'calificacion' => '90',
            'materiaId' => '1',
            'estudianteId' => '1',
            'profesorId' => '2',
        ]);

        DB::table('calificacions')->insert([
            'actividad' => 'actividad 1',
            'tipo' => 'actividad',
            'calificacion' => '78',
            'materiaId' => '2',
            'estudianteId' => '1',
            'profesorId' => '2',
        ]);
    }
}
