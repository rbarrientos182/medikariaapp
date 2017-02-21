<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Medikaria\Models\User::class, function (Faker\Generator $faker) {
    return [
        'email' => $faker->safeEmail,
        'nombre' => $faker->name($gender = null|'male'|'female'),
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Medikaria\Models\Paciente::class, function (Faker\Generator $faker) {
    return [
        'nombrepaciente' => $faker->name,
        'direccionpaciente' => $faker->address,
        'estatura' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 2),
        'nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sexo' => $faker->randomElement($array = array ('Hombre','Mujer')),
        'celular' => $faker->phoneNumber,
    ];
});

$factory->define(Medikaria\Models\Medico::class, function (Faker\Generator $faker) {
    return [

        'rfc' => $faker->regexify('^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$'),
        'cedula' => $faker->randomNumber($nbDigits = 8), // 79907610,
        'celular' => $faker->phoneNumber,
        'direccion' => $faker->address,
    ];
});

$factory->define(Medikaria\Models\Hospital::class, function (Faker\Generator $faker) {
    return [
        'nombrehospital' => $faker->company,
        'direccionhospital' => $faker->address,
    ];
});

$factory->define(Medikaria\Models\Banco::class, function (Faker\Generator $faker) {
    return [
        'nombrebanco' => $faker->company,
    ];
});

$factory->define(Medikaria\Models\DatoBancario::class, function (Faker\Generator $faker) {
    return [
        'notarjeta' => $faker->creditCardNumber,
        'fechavencimiento' => $faker->creditCardExpirationDateString,
    ];
});

$factory->define(Medikaria\Models\Farmacia::class, function (Faker\Generator $faker) {
    return [
        'nombrefarmacia' => $faker->company,
        'direccionfarmacia' => $faker->address,
        'latitud' => $faker->latitude($min = -90, $max = 90),
        'longitud' => $faker->longitude($min = -180, $max = 180),
        'telefono' => $faker->phoneNumber,
    ];
});

$factory->define(Medikaria\Models\Medicamento::class, function (Faker\Generator $faker) {
    return [
        'nombremedicamento' => $faker->company,
        'laboratorio' => $faker->company,
        'presentacion' => $faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 2),
        'contenido' => $faker->text($maxNbChars = 200),
    ];
});
