<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlaylistUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // suppression des données de la table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('playlist_user')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // création numéro aléatoire
        $numbers = range(1, 100);
        shuffle($numbers);

        // insérer les données
        for($i = 2; $i <= 20; $i++)
        {
            DB::table('playlist_user')->insert([
                'user_id' => $i,
                'playlist_id' => $numbers[$i],
            ]);
        }
    }
}
