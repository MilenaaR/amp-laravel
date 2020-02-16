<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        \App\Country::create([
            'name' => 'Montenegro',
            'alpha3' => 'MNE'
        ]);

        \App\Country::create([
            'name' => 'Serbia',
            'alpha3' => 'SRB'
        ]);
    }
}
