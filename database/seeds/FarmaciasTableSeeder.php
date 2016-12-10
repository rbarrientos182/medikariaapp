<?php

use Illuminate\Database\Seeder;

class FarmaciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Farmacia::truncate();
        
        factory(Medikaria\Models\Farmacia::class, 10)->create()->each(function ($farmacia) {
        });
    }
}
