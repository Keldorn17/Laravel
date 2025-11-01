<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('jelentkezes')->truncate();
        DB::table('jelentkezo')->truncate();
        DB::table('kepzes')->truncate(); // Assuming you have a KepzesSeeder
        $this->call([
            DefaultAdminSeeder::class,
            KepzesSeeder::class,
            JelentkezoSeeder::class,
            JelentkezesSeeder::class
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
