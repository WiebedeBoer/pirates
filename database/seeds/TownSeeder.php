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
		//pirate towns
		// , jamaica
		DB::table('towns')->insert([
			'town_name' => 'Port Royal',
			'country' => '1',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1494',
			'category_size' => 'capital',
			'plantation' => 'cocoa',
			'factory' => 'luxuries',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Charles'
		]);
		// , belize honduras
		DB::table('towns')->insert([
			'town_name' => 'Belize',
			'country' => '1',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1638',
			'category_size' => 'town',
			'plantation' => 'naval stores',
			'factory' => 'goods',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Barlee'
		]);	
		// , cayman islands
		DB::table('towns')->insert([
			'town_name' => 'Georgetown',
			'country' => '1',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1661',
			'category_size' => 'town',
			'plantation' => 'tobacco',
			'factory' => 'goods',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort George'
		]);
		// , yucatan
		DB::table('towns')->insert([
			'town_name' => 'Carmen',
			'country' => '1',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1672',
			'category_size' => 'town',
			'plantation' => 'spices',
			'factory' => 'goods',
			'population' => '1500',
			'guards' => '300',
			'fort' => 'Fort '
		]);		
		//buccaneer towns
		// , tortuga, haiti
		DB::table('towns')->insert([
			'town_name' => 'Tortuga',
			'country' => '2',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1625',
			'category_size' => 'capital',
			'plantation' => 'tobacco',
			'factory' => 'cloth',
			'population' => '2500',
			'guards' => '400',
			'fort' => 'Fort de Rocher'
		]);
		// , new providence, bahamas
		DB::table('towns')->insert([
			'town_name' => 'Nassau',
			'country' => '2',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1670',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'cloth',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Montagu'
		]);	
		// , eleuthera, bahamas
		DB::table('towns')->insert([
			'town_name' => 'Governors Harbour',
			'country' => '2',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1648',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'cloth',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Charlotte'
		]);
		//dutch towns
		// , curacao
		DB::table('towns')->insert([
			'town_name' => 'Willemstad',
			'country' => '3',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1634',
			'category_size' => 'capital',
			'plantation' => 'salt',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Amsterdam'
		]);	
		// , aruba
		DB::table('towns')->insert([
			'town_name' => 'Oranjestad',
			'country' => '3',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1636',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '3000',
			'guards' => '400',
			'fort' => 'Fort Zoutman'
		]);	
		// ,st. eustatius
		DB::table('towns')->insert([
			'town_name' => 'Oranjestad',
			'country' => '3',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1636',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '300',
			'guards' => '60',
			'fort' => 'Fort Oranje'
		]);	
		// , st. martin
		DB::table('towns')->insert([
			'town_name' => 'Philipsburg',
			'country' => '3',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1631',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200',
			'guards' => '60',
			'fort' => 'Fort Willem'
		]);
		// , saba
		DB::table('towns')->insert([
			'town_name' => 'De Botte',
			'country' => '3',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1640',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);
		//english towns		
		// , antigua, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Johns',
			'country' => '4',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1632',
			'category_size' => 'capital',
			'plantation' => 'spices',
			'factory' => 'luxuries',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort James'
		]);	
		// , anguilla, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'The Valley',
			'country' => '4',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1667',
			'category_size' => 'village',
			'plantation' => 'tobacco',
			'factory' => 'luxuries',
			'population' => '200'
		]);
		// , turks and caicos islands, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Cockburn Town',
			'country' => '4',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1681',
			'category_size' => 'town',
			'plantation' => 'salt',
			'factory' => 'goods',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort George'
		]);	
		// , montserrat, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Plymouth',
			'country' => '4',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1632',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '400',
			'guards' => '60',
			'fort' => 'Fort George'
		]);	
		// , barbados, windward islands
		DB::table('towns')->insert([
			'town_name' => 'Bridgetown',
			'country' => '4',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1628',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Charles'
		]);	
		// , grenada, windward islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Georges',
			'country' => '4',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1650',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Fort Royal'
		]);		
		//french towns
		// , martinique
		DB::table('towns')->insert([
			'town_name' => 'Saint Pierre',
			'country' => '5',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1638',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort de France'
		]);	
		// , guadeloupe
		DB::table('towns')->insert([
			'town_name' => 'Pointe a Pitre',
			'country' => '5',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1626',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Fleur'
		]);	
		// , st. lucia
		DB::table('towns')->insert([
			'town_name' => 'Castries',
			'country' => '5',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1650',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Vieux Fort'
		]);	
		// , dominica
		DB::table('towns')->insert([
			'town_name' => 'Roseau',
			'country' => '5',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1660',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Comfort'
		]);	
		// , haiti
		DB::table('towns')->insert([
			'town_name' => 'Port de Paix',
			'country' => '5',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1',
			'category_size' => 'capital',
			'plantation' => 'coffee',
			'factory' => 'luxuries',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort des Trois Pavillions'
		]);	
		// , haiti
		DB::table('towns')->insert([
			'town_name' => 'Petit Goave',
			'country' => '5',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Jacques'
		]);			
		//spanish towns
		// , hispaniola
		DB::table('towns')->insert([
			'town_name' => 'Santo Domingo',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1496',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// , puerto rico
		DB::table('towns')->insert([
			'town_name' => 'San Juan',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1493',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Segarra'
		]);	
		// , cuba
		DB::table('towns')->insert([
			'town_name' => 'Havana',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1519',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort de los Tres Reyes'
		]);	
		// , cuba
		DB::table('towns')->insert([
			'town_name' => 'Santiago',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1515',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// , cuba
		DB::table('towns')->insert([
			'town_name' => 'Puerto Principe',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1514',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// , mexico
		DB::table('towns')->insert([
			'town_name' => 'Veracruz',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1519',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Juan'
		]);	
		// , yucatan
		DB::table('towns')->insert([
			'town_name' => 'Campeche',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1526',
			'category_size' => 'capital',
			'plantation' => 'salt',
			'factory' => 'luxuries',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Miguel'
		]);		
		// , guatemala
		DB::table('towns')->insert([
			'town_name' => 'Trujillo',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1524',
			'category_size' => 'capital',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Barbara'
		]);	
		// , guatemala
		DB::table('towns')->insert([
			'town_name' => 'Omoa',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1536',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// , venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Cartagena',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Real'
		]);	
		// venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Puerto Bello',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Real'
		]);	
		// venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Nombre de Dios',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Real'
		]);
		// venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Santa Marta',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1525',
			'category_size' => 'town',
			'plantation' => 'coffee',
			'factory' => 'goods',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Rio de la Hacha',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1535',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'luxuries',
			'population' => '2000',
			'guards' => '400',
			'fort' => 'Fort Real'
		]);
		// , venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Maracaibo',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1529',
			'category_size' => 'town',
			'plantation' => 'coffee',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// , venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Puerto Cabello',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1578',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'luxuries',
			'population' => '2000',
			'guards' => '400',
			'fort' => 'Fort Real'
		]);	
		// , venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Caracas',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1567',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);
		// , venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Cumana',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1515',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);			
		// , margarita, new granada
		DB::table('towns')->insert([
			'town_name' => 'Porlamar',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1536',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		// , trinidad, new granada
		DB::table('towns')->insert([
			'town_name' => 'Port au Spain',
			'country' => '6',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1560',
			'category_size' => 'capital',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Fort George'
		]);			
		//danish towns
		// , charlotte amelie, st. thomas, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Taphus',
			'country' => '7',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1666',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1800',
			'guards' => '300',
			'fort' => 'Fort Christian'
		]);	
		// , st. john, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Cruz Bay',
			'country' => '7',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1673',
			'category_size' => 'village',
			'plantation' => 'cotton',
			'factory' => 'cloth',
			'population' => '200'
		]);	
		// , st. john, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Coral Bay',
			'country' => '7',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1673',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '300',
			'guards' => '80',
			'fort' => 'Fort Frederik'
		]);	
		//curonian towns
		// , tobago
		DB::table('towns')->insert([
			'town_name' => 'Jacobsstadt',
			'country' => '8',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1658',
			'category_size' => 'capital',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '500',
			'guards' => '150',
			'fort' => 'Fort Jacobus'
		]);	
		//hospitaller towns
		// , st. kitts
		DB::table('towns')->insert([
			'town_name' => 'Basseterre',
			'country' => '9',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1639',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1500',
			'guards' => '300',
			'fort' => 'Fort Charles'
		]);	
		// , st. barths
		DB::table('towns')->insert([
			'town_name' => 'Gustavia',
			'country' => '9',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1648',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Gustav'
		]);	
		// , st. croix, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Croix',
			'country' => '9',
			'xcoord' => '1',
			'ycoord' => '1',
			'foundation' => '1695',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);	

		
		
    }
}
