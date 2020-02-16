<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        \App\Hotel::create(['name' => 'Hilton']);
        \App\Hotel::create(['name' => 'Podgorica']);
        \App\Hotel::create(['name' => 'Premier']);
    }
}
