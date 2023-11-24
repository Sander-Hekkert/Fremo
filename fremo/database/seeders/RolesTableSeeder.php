// DatabaseSeeder.php
<?php
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::create(['name' => 'Beheerder']); // Role 1
        Role::create(['name' => 'Gebruiker']); // Role 2
        Role::create(['name' => 'Anoniem']);   // Role 3
    }
}
