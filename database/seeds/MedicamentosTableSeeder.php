<?php

use Illuminate\Database\Seeder;

class MedicamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Medicamento::truncate();
        factory(Medikaria\Models\Medicamento::class, 10)->create()->each(function ($medicamento) {
        });
    }
}
