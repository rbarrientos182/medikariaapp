<?php

use Illuminate\Database\Seeder;

class HospitalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Hospital::truncate();

        factory(Medikaria\Models\Hospital::class, 10)->create()->each(function ($hospital) {
        });

    }
}
