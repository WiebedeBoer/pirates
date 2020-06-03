<?php

use Illuminate\Database\Seeder;

class GovernorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		//governors
		//port royal
		DB::table('governors')->insert([
			'governor_name' => 'Henry Morgan',
			'palace' => '1',
			'colony' => '1',
			'country' => '1'
		]);
		//belize
		DB::table('governors')->insert([
			'governor_name' => 'Abraham Blauvelt',
			'palace' => '4',
			'colony' => '2',
			'country' => '1'
		]);
		//tortuga
		DB::table('governors')->insert([
			'governor_name' => 'Bernard Desjean',
			'palace' => '9',
			'colony' => '3',
			'country' => '1'
		]);
		//bahamas
		DB::table('governors')->insert([
			'governor_name' => 'Benjamin Hornigold',
			'palace' => '10',
			'colony' => '4',
			'country' => '2'
		]);
		//dutch leeward
		DB::table('governors')->insert([
			'governor_name' => 'Johannes van Walbeeck',
			'palace' => '12',
			'colony' => '5',
			'country' => '3'
		]);
		//dutch windward
		DB::table('governors')->insert([
			'governor_name' => 'Pieter Gardyn',
			'palace' => '15',
			'colony' => '6',
			'country' => '3'
		]);
		//british leeward
		DB::table('governors')->insert([
			'governor_name' => 'William Stapleton',
			'palace' => '18',
			'colony' => '7',
			'country' => '4'
		]);
		//british windward
		DB::table('governors')->insert([
			'governor_name' => 'Henry Powell',
			'palace' => '23',
			'colony' => '8',
			'country' => '4'
		]);
		//french antilles
		DB::table('governors')->insert([
			'governor_name' => 'Jacques Dyel du Parquet',
			'palace' => '25',
			'colony' => '9',
			'country' => '5'
		]);
		//french domingue
		DB::table('governors')->insert([
			'governor_name' => 'Jean Baptiste Colbert',
			'palace' => '30',
			'colony' => '10',
			'country' => '5'
		]);
		//spanish domingo
		DB::table('governors')->insert([
			'governor_name' => 'Juan Ortiz de Matienzo',
			'palace' => '32',
			'colony' => '11',
			'country' => '6'
		]);
		//spanish puerto rico
		DB::table('governors')->insert([
			'governor_name' => 'Juan Ponce de Leon',
			'palace' => '34',
			'colony' => '12',
			'country' => '6'
		]);
		//spanish cuba
		DB::table('governors')->insert([
			'governor_name' => 'Diego Velazquez de Cuellar',
			'palace' => '36',
			'colony' => '13',
			'country' => '6'
		]);
		//spanish mexico
		DB::table('governors')->insert([
			'governor_name' => 'Antonio de Mendoza',
			'palace' => '41',
			'colony' => '14',
			'country' => '6'
		]);
		//spanish yucatan
		DB::table('governors')->insert([
			'governor_name' => 'Francisco de Montejo',
			'palace' => '43',
			'colony' => '15',
			'country' => '6'
		]);
		//spanish guatemala
		DB::table('governors')->insert([
			'governor_name' => 'Pedro de Alvarado',
			'palace' => '44',
			'colony' => '16',
			'country' => '6'
		]);
		//spanish new granada
		DB::table('governors')->insert([
			'governor_name' => 'Rodrigo de Bastidas',
			'palace' => '47',
			'colony' => '17',
			'country' => '6'
		]);
		//danish west indies
		DB::table('governors')->insert([
			'governor_name' => 'Erik Nielson Smit',
			'palace' => '58',
			'colony' => '18',
			'country' => '7'
		]);
		//new courland
		DB::table('governors')->insert([
			'governor_name' => 'Willem Mollens',
			'palace' => '61',
			'colony' => '19',
			'country' => '8'
		]);
		//hospitaller saint cristopher
		DB::table('governors')->insert([
			'governor_name' => 'Pierre du Halde',
			'palace' => '62',
			'colony' => '20',
			'country' => '9'
		]);

    }
}
