<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Clear existing data from the roles table
        DB::table('roles')->truncate();

        // Insert default roles
        $roles = [
            ['name' => 'Beheerder'],
            ['name' => 'Gebruiker'],
            ['name' => 'Anoniem'],
        ];

        DB::table('roles')->insert($roles);
    }
}
