<?php

use Illuminate\Database\Seeder;

class ColonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//brethren
		//1
		DB::table('colonies')->insert([
			'colony_name' => 'Jamaica',
			'country' => '1'
		]);
		//2
		DB::table('colonies')->insert([
			'colony_name' => 'Belize',
			'country' => '1'
		]);
		//3
		DB::table('colonies')->insert([
			'colony_name' => 'Tortuga',
			'country' => '1'
		]);
		//pirates
		//4
		DB::table('colonies')->insert([
			'colony_name' => 'Bahamas',
			'country' => '2'
		]);
		//dutch
		//5
		DB::table('colonies')->insert([
			'colony_name' => 'Dutch Leeward Antilles',
			'country' => '3'
		]);
		//6
		DB::table('colonies')->insert([
			'colony_name' => 'Dutch Windward Antilles',
			'country' => '3'
		]);
		//english
		//7
		DB::table('colonies')->insert([
			'colony_name' => 'British Leeward Antilles',
			'country' => '4'
		]);
		//8
		DB::table('colonies')->insert([
			'colony_name' => 'British Windward Antilles',
			'country' => '4'
		]);	
		//french
		//9
		DB::table('colonies')->insert([
			'colony_name' => 'French Antilles',
			'country' => '5'
		]);
		//10
		DB::table('colonies')->insert([
			'colony_name' => 'Saint Domingue',
			'country' => '5'
		]);
		//spanish
		//11
		DB::table('colonies')->insert([
			'colony_name' => 'Santo Domingo',
			'country' => '6'
		]);
		//12
		DB::table('colonies')->insert([
			'colony_name' => 'Puerto Rico',
			'country' => '6'
		]);
		//13
		DB::table('colonies')->insert([
			'colony_name' => 'Cuba',
			'country' => '6'
		]);
		//14
		DB::table('colonies')->insert([
			'colony_name' => 'Mexico',
			'country' => '6'
		]);
		//15
		DB::table('colonies')->insert([
			'colony_name' => 'Yucatan',
			'country' => '6'
		]);
		//16
		DB::table('colonies')->insert([
			'colony_name' => 'Guatemala',
			'country' => '6'
		]);
		//17
		DB::table('colonies')->insert([
			'colony_name' => 'New Granada',
			'country' => '6'
		]);
		//danish
		//18
		DB::table('colonies')->insert([
			'colony_name' => 'Danish West Indies',
			'country' => '7'
		]);
		//curonian
		//19
		DB::table('colonies')->insert([
			'colony_name' => 'New Courland',
			'country' => '8'
		]);
		//hospitaller
		//20
		DB::table('colonies')->insert([
			'colony_name' => 'Saint Cristopher',
			'country' => '9'
		]);

    }
}
