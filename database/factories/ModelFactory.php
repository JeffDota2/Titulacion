<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Cv::class, static function (Faker\Generator $faker) {
    return [
        'cedula' => $faker->randomNumber(5),
        'nombreuno' => $faker->sentence,
        'nombredos' => $faker->sentence,
        'apellidouno' => $faker->sentence,
        'apellidos' => $faker->sentence,
        'direccion' => $faker->sentence,
        'telefono' => $faker->randomNumber(5),
        'correo' => $faker->sentence,
        'colegio' => $faker->sentence,
        'fechaingreso' => $faker->randomNumber(5),
        'fechafin' => $faker->randomNumber(5),
        'uni' => $faker->sentence,
        'fechainicio' => $faker->randomNumber(5),
        'fechafinal' => $faker->randomNumber(5),
        'curso' => $faker->sentence,
        'fechaini' => $faker->randomNumber(5),
        'fechafi' => $faker->randomNumber(5),
        'empresa' => $faker->sentence,
        'cargo' => $faker->sentence,
        'descripcion' => $faker->sentence,
        'periodouno' => $faker->randomNumber(5),
        'periododos' => $faker->randomNumber(5),
        'empresados' => $faker->sentence,
        'cargodos' => $faker->sentence,
        'descripciondos' => $faker->sentence,
        'periodou' => $faker->randomNumber(5),
        'periodod' => $faker->randomNumber(5),
        'idioma' => $faker->sentence,
        'nivel' => $faker->sentence,
        'idiomados' => $faker->sentence,
        'niveldos' => $faker->sentence,
        'areau' => $faker->sentence,
        'conocimientou' => $faker->sentence,
        'nivelu' => $faker->sentence,
        'aread' => $faker->sentence,
        'conocimientod' => $faker->sentence,
        'niveld' => $faker->sentence,
        'areat' => $faker->sentence,
        'conocimientot' => $faker->sentence,
        'niveltr' => $faker->sentence,
        'nom' => $faker->sentence,
        'relacion' => $faker->sentence,
        'contacto' => $faker->sentence,
        'nomu' => $faker->sentence,
        'relaciond' => $faker->sentence,
        'contactod' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
