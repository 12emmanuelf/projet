<?php

namespace Database\Seeders;

use App\Models\Abonnement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AbonnementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Abonnement::create(['nom' => 'Abonnement Basique', 'prix' => 5000]);
        Abonnement::create(['nom' => 'Abonnement Premuin', 'prix' => 11500]);
        Abonnement::create(['nom' => 'Abonnement VIP', 'prix' => 20500]);
    }
}
