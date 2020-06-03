<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//countries
		//1
		DB::table('countries')->insert([
			'country_name' => 'Brethren of the Coast',
			'capital' => 'Port Royal',
			'port' => 'Port Royal',
			'flag' => 'bh',
			'song' => 'yohoho'
		]);	
		//2
		DB::table('countries')->insert([
			'country_name' => 'Pirates Republic',
			'capital' => 'Nassau',
			'port' => 'Nassau',
			'flag' => 'pi',
			'song' => 'yohoho'
		]);	
		//3
		DB::table('countries')->insert([
			'country_name' => 'Netherlands',
			'capital' => 'Amsterdam',
			'port' => 'Amsterdam',
			'flag' => 'nl',
			'song' => 'wilhelmus'
		]);
		//4
		DB::table('countries')->insert([
			'country_name' => 'England',
			'capital' => 'London',
			'port' => 'London',
			'flag' => 'en',
			'song' => 'rulesthewaves'
		]);
		//5
		DB::table('countries')->insert([
			'country_name' => 'France',
			'capital' => 'Paris',
			'port' => 'Nantes',
			'flag' => 'fr',
			'song' => 'vivehenry'
		]);
		//6
		DB::table('countries')->insert([
			'country_name' => 'Spain',
			'capital' => 'Madrid',
			'port' => 'Seville',
			'flag' => 'sp',
			'song' => 'marchareal'
		]);
		//7
		DB::table('countries')->insert([
			'country_name' => 'Denmark',
			'capital' => 'Copenhagen',
			'port' => 'Copenhagen',
			'flag' => 'de',
			'song' => 'yndigt'
		]);
		//8
		DB::table('countries')->insert([
			'country_name' => 'Courland',
			'capital' => 'Mitau',
			'port' => 'Libau',
			'flag' => 'co',
			'song' => 'dievs'
		]);
		//9
		DB::table('countries')->insert([
			'country_name' => 'Knights Hospitaller',
			'capital' => 'Valletta',
			'port' => 'Valletta',
			'flag' => 'ho',
			'song' => 'crusader'
		]);
    }
}
