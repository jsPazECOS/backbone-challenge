<?php

namespace Database\Seeders;

use App\Models\SettlementType;
use Illuminate\Database\Seeder;

class SettlementTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['key' => '09', 'name' => 'Colonia'],
            ['key' => '28', 'name' => 'Pueblo'],
            ['key' => '02', 'name' => 'Barrio'],
            ['key' => '17', 'name' => 'Equipamiento'],
            ['key' => '04', 'name' => 'Campamento'],
            ['key' => '01', 'name' => 'Aeropuerto']
        ];
        SettlementType::factory()
            ->createMany($types);
    }
}
