<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\technicien;
use App\Models\annonce;
use App\Models\Client;
use App\Models\domain;
use App\Models\Sousdomain;

class TechnicienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Technicien::truncate();
        domain::truncate();
        domain::create([
            'name'=>'Informatique',
        ]);
        domain::create([
            'name' => 'Mecanique'
        ]);

        domain::create([
            'name' => 'Electricité'
        ]);
        Sousdomain::create([
            'name' => 'Maintenance',
            'domain_id' => 1,
        ]);
        Sousdomain::create([
            'name' => 'Réseau',
            'domain_id' => 1,
        ]);
        Sousdomain::create([
            'name' => 'Robotique',
            'domain_id' => 2,
        ]);
        Sousdomain::create([
            'name' => 'mé-catronique',
            'domain_id' => 2,
        ]);
        Sousdomain::create([
            'name' => ' L’installation de réseaux électriques ',
            'domain_id' => 3,
        ]);
        Sousdomain::create([
            'name' => 'L’installation de groupes électrogènes',
            'domain_id' => 3,
        ]);
        $techniciens= Technicien::create([
            'nom'=>'KUATE',
            'prenom'=>'Flora',
            'matricule'=>'18NTI022I',
            'email'=>'@gmail.com',
            'mot de passe'=>'password'
        ]);
            Client::truncate();
            $client = Client::create([
            'nom' => 'Admin',
            'prenom' => 'Mk',
            'email' => 'admin@cnoumbo.com',
            'mot de passe' => 'password',
            ]);

        
        annonce::truncate();
        $annonce = annonce ::create([
            'title'=>'Infographie',
            'description'=>'Florahfhhfhfhhf',
            'domaine'=>'Informatique',
            'sous_domaine' =>'TIC',
            'client_id' => 1
        ]);
    }
}
