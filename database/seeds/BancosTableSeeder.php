<?php

use Illuminate\Database\Seeder;

class BancosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Banco::truncate();

        factory(Medikaria\Models\Banco::class, 10)->create()->each(function ($banco) {
        });
    }
}
