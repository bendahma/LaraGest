<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Magazin;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        Magazin::create([
         'name' => 'BENDJEDDOU ELECTROMENAGER',
         'address' => 'Skikda',
         'commune' => 'Skikda',
        ]);
    }
}
