<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTablesSeeder::class);
        $this->call(ElectronicsTablesSeeder::class);
        $this->call(MensTablesSeeder::class);
        $this->call(WomensTablesSeeder::class);
        $this->call(SneakersTablesSeeder::class);
      $this->call(BackgroundsTablesSeeder::class);
    }
}
