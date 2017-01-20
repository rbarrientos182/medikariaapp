<?php

use Illuminate\Database\Seeder;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Medikaria\Models\Paciente::class, 10)->create()->each(function ($paciente) {
      });
    }
}
