<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert([
            [
                'nPerCodigo' => 1,
                'cPerApellidos' => 'Ramos',
                'cPerNombre' => 'Juliana',
                'cPerDireccion' => 'Av. Arequipa 1200, Lima',
                'dPerFecNac' => '1990-05-15',
                'nPerEdad' => 34,
                'nPerSueldo' => 2500.00,
                'cPerRnd' => 'xzy789mno',
                'cPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nPerCodigo' => 2,
                'cPerApellidos' => 'Gonzales',
                'cPerNombre' => 'Carlos',
                'cPerDireccion' => 'Jr. Los Cipreses 456, Trujillo',
                'dPerFecNac' => '1985-11-23',
                'nPerEdad' => 38,
                'nPerSueldo' => 3200.75,
                'cPerRnd' => 'abc456def',
                'cPerEstado' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nPerCodigo' => 3,
                'cPerApellidos' => 'Martinez',
                'cPerNombre' => 'Ana',
                'cPerDireccion' => 'Calle Las Flores 789, Arequipa',
                'dPerFecNac' => '1995-07-30',
                'nPerEdad' => 28,
                'nPerSueldo' => 2800.00,
                'cPerRnd' => 'xyz123abc',
                'cPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nPerCodigo' => 4,
                'cPerApellidos' => 'Lopez',
                'cPerNombre' => 'Jorge',
                'cPerDireccion' => 'Av. Larco 1025, Chiclayo',
                'dPerFecNac' => '2000-03-18',
                'nPerEdad' => 24,
                'nPerSueldo' => 1900.50,
                'cPerRnd' => 'mno789xyz',
                'cPerEstado' => '0',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nPerCodigo' => 5,
                'cPerApellidos' => 'Fernandez',
                'cPerNombre' => 'Lucia',
                'cPerDireccion' => 'Jr. Santa Rosa 210, Cusco',
                'dPerFecNac' => '1998-09-12',
                'nPerEdad' => 25,
                'nPerSueldo' => 2100.30,
                'cPerRnd' => 'def123ghi',
                'cPerEstado' => '1',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
