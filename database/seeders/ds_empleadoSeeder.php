<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ds_empleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ds_empleado')->insert([
            ['nombre' => 'Juan', 'apellido' => 'Pérez', 'id_departamento' => 1, 'salario' => 350000, 'id_niveleducacion' => 3],
            ['nombre' => 'Ana', 'apellido' => 'Gómez', 'id_departamento' => 2, 'salario' => 450000, 'id_niveleducacion' => 4],
            ['nombre' => 'Luis', 'apellido' => 'Martínez', 'id_departamento' => 3, 'salario' => 5000, 'id_niveleducacion' => 4],
            ['nombre' => 'María', 'apellido' => 'Rodríguez', 'id_departamento' => 4, 'salario' => 4000, 'id_niveleducacion' => 2],
            ['nombre' => 'Carlos', 'apellido' => 'Jiménez', 'id_departamento' => 5, 'salario' => 300000, 'id_niveleducacion' => 1],
        ]);
    }
}
