<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clientes")->insert([
            [
                'nombre' => 'Ivan',
                'apellido' => 'Lopez',
                'correo' => 'zzz@gmail.com',
                'telefono'=> '11564845'
            ],
            [
                'nombre' => 'Pedro',
                'apellido' => 'Leon',
                'correo' => 'rm@gmail.com',
                'telefono'=> '11564512'
            ],
            [
                'nombre' => 'Pablo',
                'apellido' => 'BY',
                'correo' => 'utbq@gmail.com',
                'telefono'=> '11564845'
            ],
            [
                'nombre' => 'Pancho',
                'apellido' => 'Pantera',
                'correo' => 'chocomilk@gmail.com',
                'telefono'=> '11564845'
            ]
        ]);
    }
}
