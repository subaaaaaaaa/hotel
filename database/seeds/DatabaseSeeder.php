<?php

use App\Room_type;
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
        $this->call(GuestsTableSeeder::class);
        $this->call(Room_typeTableSeeder::class);
    }
}
