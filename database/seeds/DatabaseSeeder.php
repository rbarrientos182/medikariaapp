<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HospitalesTableSeeder::class);
        $this->call(BancosTableSeeder::class);
        $this->call(HospitalesTableSeeder::class);
        $this->call(FarmaciasTableSeeder::class);
        $this->call(MedicamentosTableSeeder::class);
    }
}
