<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PropertyTypesTableSeeder::class);
        $this->call(PropertyStateTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
    }
}
