<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class droitAccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // suppression des données de la table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('droitsaccess')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // création des données
        $droit_access = 'url/';

        // insertion des données dans la table
        for($i = 1; $i <= 5; $i++)
        {
            DB::table('droitsaccess')->insert([
                'url' => $droit_access.$i,
            ]);
        }
    }
}
