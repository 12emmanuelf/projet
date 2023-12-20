<?php

namespace App\Console\Commands;

use App\Models\Client;
use App\Models\Dossier;
use App\Models\Abonnement;
use Illuminate\Console\Command;

class MigrateDossierData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate:dossiers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate data from clients and abonnements tables to dossiers table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $clients = Client::all();

        foreach ($clients as $client) {
            // Extraire les données de la table client et abonnement
            $abonnement = Abonnement::where('client_id', $client->id)->first();

            // Vérifier si l'abonnement existe
            if ($abonnement) {
                // Insérer les données dans la table dossier
                Dossier::create([
                    'client_id' => $client->id,
                    'abonnement_id' => $abonnement->id,
                    // Ajoutez d'autres colonnes ici
                ]);
            } else {
                // Gérer le cas où il n'y a pas d'abonnement pour ce client
                $this->warn("No subscription found for client ID: {$client->id}");
            }
        }

        $this->info('Data migration complete.');
    }
}
