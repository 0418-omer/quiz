<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SorularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Sorular::factory(50)->create();
    }
}
