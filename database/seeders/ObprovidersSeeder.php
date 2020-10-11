<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObprovidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seeder array
        $providers = array(
            [
                'logo' => 'path',
                'bic' => 'DEMOLULLLBG',
                'provider' => 'Demo bank using Berlin Group',
                'consent' => 'DETAILED',
                'health' => null,
                'info' => null,
            ],
            [
                'logo' => 'path',
                'bic' => 'DEMOLULSTET',
                'provider' => 'Demo bank using STET',
                'consent' => 'DETAILED',
                'health' => null,
                'info' => null,
            ],

        );

        // insert seeds
        foreach ($providers as $key => $value) {
            DB::table('obproviders')->insert([
                'logo' => $value['logo'],
                'bic' => $value['bic'],
                'provider' => $value['provider'],
                'consent' => $value['consent'],
                'health' => $value['health'],
                'info' => $value['info'],
            ]);
        }
    }
}
