<?php

namespace Database\Seeders;

use App\Models\ApiDegreeFrance;
use Illuminate\Database\Seeder;

class ApiDegreeFranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 25 ; $i++) { 
            ApiDegreeFrance::create([
                'years' => '2019',
                'months' => 'January',
                'max_degree' => '9',
                'min_degree' => '-2',
                'average_degree' => '4.6',
            ]);
        }
    }
}
