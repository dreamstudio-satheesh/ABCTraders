<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(CountriesSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(AttributeSeeder::class);
        $this->call(AttributeValueSeeder::class);

        // Seed racks (and their shelves)
        $this->call(RackSeeder::class);
        
        // Seed products
        $this->call(ProductSeeder::class);
    }
}
