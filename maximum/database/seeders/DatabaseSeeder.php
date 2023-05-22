<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comentario;
use App\Models\MetodoEnvio;
use App\Models\MetodoPago;
use App\Models\Noticia;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'nombre' => 'Eduardo',
                'apellidos' => 'Villar García',
                'dni' => '26823122Q',
                'email' => 'eduardovillar194@gmail.com',
                'password' => '$2y$10$ktXLGsp.PNzIHG2bGttGB.oWRLqcSD8ZEi/wOsoQXwDsfzok/J7ru',
                'fecha_nacimiento' => '2002-03-05',
                'telefono' => '652538014',
                'cp' => '14940',
                'direccion' => 'Calle José Ruiz Moreno, 8',
                'ciudad' => 'Cabra',
                'provincia' => 'Córdoba',
                'pais' => 'España',
                'rol' => 'admin',
                'ruta_imagen' => 'img/users/defaultProfile.png'
            ]
        ];
        foreach ($users as $userData) {
            User::create($userData);
        }
        $metodosPago = [
            [
                'nombre' => 'Transferencia Bancaria'
            ],
            [
                'nombre' => 'Tarjeta de crédito'
            ],
            [
                'nombre' => 'Paypal'
            ],
            [
                'nombre' => 'Contrareembolso'
            ],

        ];
        foreach ($metodosPago as $metodoData) {
            MetodoPago::create($metodoData);
        }

        Noticia::factory(6)->create();
        \App\Models\User::factory(10)->create();
        Comentario::factory(30)->create();
        Producto::factory(10)->create();
        MetodoEnvio::factory(5)->create();

    }
}
