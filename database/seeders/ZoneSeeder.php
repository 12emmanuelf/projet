<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
        {
            Zone::create(['nom' => 'Zone A', 'groupe' => 'A']);
            Zone::create(['nom_' => 'Zone B', 'groupe' => 'B']);
            Zone::create(['nom' => 'Zone C', 'groupe' => 'C']);
            Zone::create(['nom' => 'Zone D', 'groupe' => 'D']);
            Zone::create(['nom' => 'Zone E', 'groupe' => 'E']);
            // Ajoutez d'autres zones selon vos besoins
        }

}
