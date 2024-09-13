<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $procedures = [
            [
                'type' => 'Renovació de Document d\'Identitat',
                'state' => 0,
                'dni' => '12345678A',
            ],
            [
                'type' => 'Sol·licitud de Llicència de Conduir',
                'state' => 1,
                'dni' => '87654321B',
            ],
            [
                'type' => 'Inscripció a Curs de Formació',
                'state' => 2,
                'dni' => '12312312C',
            ],
            [
                'type' => 'Canvi de Domicili',
                'state' => 0,
                'dni' => '45645645D',
            ],
            [
                'type' => 'Sol·licitud de Subvenció o Ajuda Econòmica',
                'state' => 2,
                'dni' => '78978978E',
            ],
        ];

        foreach ($procedures as $procedure) {
            DB::table('procedures')->insert([
                'type' => $procedure['type'],
                'state' => $procedure['state'],
                'dni' => $procedure['dni'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
