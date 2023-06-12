<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // suppression des données de la table
        DB::table('roles')->delete();

        // création des données
        $roles = ['admin', 'user'];
        
        // insertion des données dans la table
        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'type' => $role,
            ]);
        }
    }
}