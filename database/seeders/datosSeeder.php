<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class datosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('datos')->insert([
          'nombre'=> 'Estructura de datos',
          'autor' => 'Luis Joyanes',
        ]);

      DB::table('datos')->insert([
          'nombre'=> 'Estructura de datos',
          'autor' => 'Luis Joyanes',
        ]);


    }
}
