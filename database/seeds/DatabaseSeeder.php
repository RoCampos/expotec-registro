<?php

use Illuminate\Database\Seeder;

use Database\Seeders\PontosTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PontosTableSeeder::class);
    }
}
