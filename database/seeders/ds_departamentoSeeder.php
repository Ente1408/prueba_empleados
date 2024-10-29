<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ds_departamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ds_departamento')->insert([
            ['nombre_departamento' => 'Recursos Humanos', 'ciudad_departamento' => 'Bogotá'],
            ['nombre_departamento' => 'Finanzas', 'ciudad_departamento' => 'Medellín'],
            ['nombre_departamento' => 'Tecnología', 'ciudad_departamento' => 'Cali'],
            ['nombre_departamento' => 'Marketing', 'ciudad_departamento' => 'Barranquilla'],
            ['nombre_departamento' => 'Ventas', 'ciudad_departamento' => 'Cartagena'],
        ]);
    }
}
