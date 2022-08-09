<?php

namespace Database\Seeders;

use App\Models\FederalEntity;
use Illuminate\Database\Seeder;

class FederalEntitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FederalEntity::factory()
            ->create([
                'key' => '09',
                'name' => 'Ciudad de Mexico'
            ]);
    }
}
