<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = [
            '010' => 'Álvaro Obregón',
            '002' => 'Azcapotzalco',
            '014' => 'Benito Juárez',
            '003' => 'Coyoacán',
            '004' => 'Cuajimalpa de Morelos',
            '015' => 'Cuauhtémoc',
            '005' => 'Gustavo A. Madero',
            '006' => 'Iztacalco',
            '007' => 'Iztapalapa',
            '008' => 'La Magdalena Contreras',
            '016' => 'Miguel Hidalgo',
            '009' => 'Milpa Alta',
            '011' => 'Tláhuac',
            '012' => 'Tlalpan',
            '017' => 'Venustiano Carranza',
            '013' => 'Xochimilco',
        ];
        foreach ($municipalities as $key => $name) {
            Municipality::factory()
                ->create([
                    'key' => $key,
                    'name' => $name
                ]);
        }
    }
}
