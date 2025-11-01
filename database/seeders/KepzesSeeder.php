<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KepzesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        DB::table('kepzes')->insert([
            [
                'nev' => 'Francia',
                'felveheto' => 16,
                'minimum' => 140
            ],
            [
                'nev' => 'Angol',
                'felveheto' => 30,
                'minimum' => 150
            ],
            [
                'nev' => 'Matematika',
                'felveheto' => 16,
                'minimum' => 160
            ],
            [
                'nev' => 'Informatika',
                'felveheto' => 16,
                'minimum' => 150
            ],
            [
                'nev' => 'Környezetvédelem',
                'felveheto' => 16,
                'minimum' => 130
            ],
            [
                'nev' => 'Közgazdasági',
                'felveheto' => 30,
                'minimum' => 130
            ]
        ]);
    }
}
