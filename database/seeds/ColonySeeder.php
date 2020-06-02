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
		//1
		DB::table('colonies')->insert([
			'colony_name' => 'Jamaica',
			'country' => '1',
			'governor' => '1'
		]);
		//2
		DB::table('colonies')->insert([
			'colony_name' => 'Bahamas',
			'country' => '2',
			'governor' => '1'
		]);
		//dutch
		//3
		DB::table('colonies')->insert([
			'colony_name' => 'Dutch Leeward Antilles',
			'country' => '3',
			'governor' => '1'
		]);
		//4
		DB::table('colonies')->insert([
			'colony_name' => 'Dutch Windward Antilles',
			'country' => '3',
			'governor' => '1'
		]);
		//english
		//5
		DB::table('colonies')->insert([
			'colony_name' => 'British Leeward Antilles',
			'country' => '4',
			'governor' => '1'
		]);
		//6
		DB::table('colonies')->insert([
			'colony_name' => 'British Windward Antilles',
			'country' => '4',
			'governor' => '1'
		]);
		//french
		//7
		DB::table('colonies')->insert([
			'colony_name' => 'French Antilles',
			'country' => '5',
			'governor' => '1'
		]);
		//8
		DB::table('colonies')->insert([
			'colony_name' => 'Saint Domingue',
			'country' => '5',
			'governor' => '1'
		]);
		//spanish
		//9
		DB::table('colonies')->insert([
			'colony_name' => 'Santo Domingo',
			'country' => '6',
			'governor' => '1'
		]);
		//10
		DB::table('colonies')->insert([
			'colony_name' => 'Puerto Rico',
			'country' => '6',
			'governor' => '1'
		]);
		//11
		DB::table('colonies')->insert([
			'colony_name' => 'Cuba',
			'country' => '6',
			'governor' => '1'
		]);
		//12
		DB::table('colonies')->insert([
			'colony_name' => 'Mexico',
			'country' => '6',
			'governor' => '1'
		]);
		//13
		DB::table('colonies')->insert([
			'colony_name' => 'Yucatan',
			'country' => '6',
			'governor' => '1'
		]);
		//14
		DB::table('colonies')->insert([
			'colony_name' => 'Guatemala',
			'country' => '6',
			'governor' => '1'
		]);
		//15
		DB::table('colonies')->insert([
			'colony_name' => 'New Granada',
			'country' => '6',
			'governor' => '1'
		]);
		//danish
		//16
		DB::table('colonies')->insert([
			'colony_name' => 'Danish West Indies',
			'country' => '7',
			'governor' => '1'
		]);
		//curonian
		//17
		DB::table('colonies')->insert([
			'colony_name' => 'New Courland',
			'country' => '8',
			'governor' => '1'
		]);
		//hospitaller
		//18
		DB::table('colonies')->insert([
			'colony_name' => 'Saint Cristopher',
			'country' => '9',
			'governor' => '1'
		]);

    }
}
