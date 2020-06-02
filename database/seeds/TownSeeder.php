<?php

use Illuminate\Database\Seeder;

class TownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//towns
		//1
		DB::table('towns')->insert([
			'town_name' => 'Port Royal',
			'country' => '1',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
		//2
		DB::table('towns')->insert([
			'town_name' => 'Tortuga',
			'country' => '2',
			'xcoord' => '1',
			'ycoord' => '1'
		]);
    }
}
