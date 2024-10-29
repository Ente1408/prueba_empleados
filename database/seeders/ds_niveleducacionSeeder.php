<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ds_niveleducacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ds_niveleducacion')->insert([
            ['descripcion' => 'Secundaria'],
            ['descripcion' => 'Técnico'],
            ['descripcion' => 'Tecnólogo'],
            ['descripcion' => 'Profesional'],
            ['descripcion' => 'Postgrado'],
        ]);
    }
}
