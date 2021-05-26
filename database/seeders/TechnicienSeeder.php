<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\domain;
use App\Models\annonce;
use App\Models\Sousdomain;
use App\Models\technicien;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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

        domain::create ([
            'name' => 'Electricité'
        ]);

        domain::create([
            'name' => 'Génie civil'
         ]); 
         domain::create([
            'name'=>'Forestier',
        ]);  
        domain::create([
            'name'=>'Economie Sociale et familiale',
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
        Sousdomain::create([
            'name' => 'Batiment',
            'domain_id' => 4
            ]);
             Sousdomain::create([
                'name' => 'Travaux publique',
                'domain_id' => 4
                ]);
                Sousdomain::create([
                    'name' => 'Explotation forestiére',
                    'domain_id' => 5
                    ]);
                    Sousdomain::create([
                        'name' => 'Metier bois',
                        'domain_id' => 5
                        ]);
                        Sousdomain::create([
                            'name' => 'Industrie du bois',
                            'domain_id' => 5
                            ]);
                            Sousdomain::create([
                                'name' => 'Puericulture',
                                'domain_id' => 6
                                ]);
                            Sousdomain::create([
                                'name' => 'Gérontologie et Auxillière de Vie',
                                'domain_id' => 6
                                ]);
                                Sousdomain::create([
                                    'name' => 'Esthétique Coiffure Cosmétologie',
                                    'domain_id' => 6
                                    ]);
                    
        $techniciens= Technicien::create([
            'name'=>'KUATE',
            'prenom'=>'Flora',
            'matricule'=>'18NTI022I',
            'email'=>'@gmail.com',
            'mot de passe'=>'password'
        ]);
            Client::truncate();
            $client = Client::create([
            'name' => 'Admin',
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
