<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Estudiante',
            'email' => 'estudiante@ejemplo.com',
            'password' => Hash::make('12345678'),
            'type' => 'estudiante',
        ]);

        DB::table('users')->insert([
            'name' => 'Profesor',
            'email' => 'profesor@ejemplo.com',
            'password' => Hash::make('12345678'),
            'type' => 'profesor',
        ]);
    }
}
