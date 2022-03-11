<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'cv' => [
        'title' => 'Cv',

        'actions' => [
            'index' => 'Cv',
            'create' => 'New Cv',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'cedula' => 'Cedula',
            'nombreuno' => 'Nombreuno',
            'nombredos' => 'Nombredos',
            'apellidouno' => 'Apellidouno',
            'apellidos' => 'Apellidos',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'colegio' => 'Colegio',
            'fechaingreso' => 'Fechaingreso',
            'fechafin' => 'Fechafin',
            'uni' => 'Uni',
            'fechainicio' => 'Fechainicio',
            'fechafinal' => 'Fechafinal',
            'curso' => 'Curso',
            'fechaini' => 'Fechaini',
            'fechafi' => 'Fechafi',
            'empresa' => 'Empresa',
            'cargo' => 'Cargo',
            'descripcion' => 'Descripcion',
            'periodouno' => 'Periodouno',
            'periododos' => 'Periododos',
            'empresados' => 'Empresados',
            'cargodos' => 'Cargodos',
            'descripciondos' => 'Descripciondos',
            'periodou' => 'Periodou',
            'periodod' => 'Periodod',
            'idioma' => 'Idioma',
            'nivel' => 'Nivel',
            'idiomados' => 'Idiomados',
            'niveldos' => 'Niveldos',
            'areau' => 'Areau',
            'conocimientou' => 'Conocimientou',
            'nivelu' => 'Nivelu',
            'aread' => 'Aread',
            'conocimientod' => 'Conocimientod',
            'niveld' => 'Niveld',
            'areat' => 'Areat',
            'conocimientot' => 'Conocimientot',
            'niveltr' => 'Niveltr',
            'nom' => 'Nom',
            'relacion' => 'Relacion',
            'contacto' => 'Contacto',
            'nomu' => 'Nomu',
            'relaciond' => 'Relaciond',
            'contactod' => 'Contactod',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];