<?php

use Illuminate\Database\Seeder;
use Medikaria\Models\User;
use Medikaria\Models\Paciente;
use Medikaria\Models\Medico;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Paciente::truncate();
        Medico::truncate();
    }
}
