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
		//1, jamaica
		DB::table('towns')->insert([
			'town_name' => 'Port Royal',
			'country' => '1',
			'colony' => '1',
			'xcoord' => '1887',
			'ycoord' => '1409',
			'foundation' => '1494',
			'category_size' => 'capital',
			'plantation' => 'cocoa',
			'factory' => 'luxuries',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Charles'
		]);
		//2, belize honduras
		DB::table('towns')->insert([
			'town_name' => 'Belize',
			'country' => '1',
			'colony' => '1',
			'xcoord' => '892',
			'ycoord' => '1451',
			'foundation' => '1638',
			'category_size' => 'town',
			'plantation' => 'naval stores',
			'factory' => 'goods',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Barlee'
		]);	
		//3, cayman islands
		DB::table('towns')->insert([
			'town_name' => 'Georgetown',
			'country' => '1',
			'colony' => '1',
			'xcoord' => '1487',
			'ycoord' => '1288',
			'foundation' => '1661',
			'category_size' => 'town',
			'plantation' => 'tobacco',
			'factory' => 'goods',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort George'
		]);
		//4, yucatan
		DB::table('towns')->insert([
			'town_name' => 'Carmen',
			'country' => '1',
			'colony' => '1',
			'xcoord' => '573',
			'ycoord' => '1344',
			'foundation' => '1672',
			'category_size' => 'town',
			'plantation' => 'spices',
			'factory' => 'goods',
			'population' => '1500',
			'guards' => '300',
			'fort' => 'Fort '
		]);		
		//buccaneer towns
		//5, tortuga, haiti
		DB::table('towns')->insert([
			'town_name' => 'Tortuga',
			'country' => '2',
			'colony' => '2',
			'xcoord' => '2250',
			'ycoord' => '1221',
			'foundation' => '1625',
			'category_size' => 'capital',
			'plantation' => 'tobacco',
			'factory' => 'cloth',
			'population' => '2500',
			'guards' => '400',
			'fort' => 'Fort de Rocher'
		]);
		//6, new providence, bahamas
		DB::table('towns')->insert([
			'town_name' => 'Nassau',
			'country' => '2',
			'colony' => '2',
			'xcoord' => '1844',
			'ycoord' => '739',
			'foundation' => '1670',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'cloth',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Montagu'
		]);	
		//7, eleuthera, bahamas
		DB::table('towns')->insert([
			'town_name' => 'Governors Harbour',
			'country' => '2',
			'colony' => '2',
			'xcoord' => '1938',
			'ycoord' => '727',
			'foundation' => '1648',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'cloth',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Charlotte'
		]);
		//dutch towns
		//8, curacao, leeward
		DB::table('towns')->insert([
			'town_name' => 'Willemstad',
			'country' => '3',
			'colony' => '3',
			'xcoord' => '2582',
			'ycoord' => '1944',
			'foundation' => '1634',
			'category_size' => 'capital',
			'plantation' => 'salt',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Amsterdam'
		]);	
		//9, aruba, leeward
		DB::table('towns')->insert([
			'town_name' => 'Oranjestad',
			'country' => '3',
			'colony' => '3',
			'xcoord' => '2485',
			'ycoord' => '1906',
			'foundation' => '1636',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '3000',
			'guards' => '400',
			'fort' => 'Fort Zoutman'
		]);	
		//10, st. eustatius, windward
		DB::table('towns')->insert([
			'town_name' => 'Oranjestad',
			'country' => '3',
			'colony' => '4',
			'xcoord' => '3105',
			'ycoord' => '1456',
			'foundation' => '1636',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '300',
			'guards' => '60',
			'fort' => 'Fort Oranje'
		]);	
		//11, st. martin, windward
		DB::table('towns')->insert([
			'town_name' => 'Philipsburg',
			'country' => '3',
			'colony' => '4',
			'xcoord' => '3099',
			'ycoord' => '1405',
			'foundation' => '1631',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '300',
			'guards' => '60',
			'fort' => 'Fort Willem'
		]);
		//12, saba, windward
		DB::table('towns')->insert([
			'town_name' => 'De Botte',
			'country' => '3',
			'colony' => '4',
			'xcoord' => '3082',
			'ycoord' => '1442',
			'foundation' => '1640',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);
		//english towns		
		//13, antigua, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Johns',
			'country' => '4',
			'colony' => '5',
			'xcoord' => '3204',
			'ycoord' => '1485',
			'foundation' => '1632',
			'category_size' => 'capital',
			'plantation' => 'spices',
			'factory' => 'luxuries',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort James'
		]);	
		//14, barbuda, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Codrington',
			'country' => '4',
			'colony' => '5',
			'xcoord' => '3206',
			'ycoord' => '1445',
			'foundation' => '1667',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);
		//15, anguilla, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'The Valley',
			'country' => '4',
			'colony' => '5',
			'xcoord' => '3096',
			'ycoord' => '1386',
			'foundation' => '1667',
			'category_size' => 'village',
			'plantation' => 'tobacco',
			'factory' => 'luxuries',
			'population' => '200'
		]);
		//16, turks and caicos islands, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Cockburn Town',
			'country' => '4',
			'colony' => '5',
			'xcoord' => '2387',
			'ycoord' => '1083',
			'foundation' => '1681',
			'category_size' => 'town',
			'plantation' => 'salt',
			'factory' => 'goods',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort George'
		]);	
		//17, montserrat, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Plymouth',
			'country' => '4',
			'colony' => '5',
			'xcoord' => '3171',
			'ycoord' => '1527',
			'foundation' => '1632',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '400',
			'guards' => '60',
			'fort' => 'Fort George'
		]);	
		//18, barbados, windward islands
		DB::table('towns')->insert([
			'town_name' => 'Bridgetown',
			'country' => '4',
			'colony' => '6',
			'xcoord' => '3399',
			'ycoord' => '1854',
			'foundation' => '1628',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Charles'
		]);	
		//19, grenada, windward islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Georges',
			'country' => '4',
			'colony' => '6',
			'xcoord' => '3212',
			'ycoord' => '1949',
			'foundation' => '1650',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Fort Royal'
		]);		
		//french towns
		//20, martinique
		DB::table('towns')->insert([
			'town_name' => 'Saint Pierre',
			'country' => '5',
			'colony' => '7',
			'xcoord' => '3262',
			'ycoord' => '1704',
			'foundation' => '1638',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort de France'
		]);	
		//21, guadeloupe
		DB::table('towns')->insert([
			'town_name' => 'Pointe a Pitre',
			'country' => '5',
			'colony' => '7',
			'xcoord' => '3232',
			'ycoord' => '1570',
			'foundation' => '1626',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Fleur'
		]);	
		//22, st. lucia
		DB::table('towns')->insert([
			'town_name' => 'Castries',
			'country' => '5',
			'colony' => '7',
			'xcoord' => '3279',
			'ycoord' => '1770',
			'foundation' => '1650',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Vieux Fort'
		]);	
		//23, dominica
		DB::table('towns')->insert([
			'town_name' => 'Roseau',
			'country' => '5',
			'colony' => '7',
			'xcoord' => '3244',
			'ycoord' => '1655',
			'foundation' => '1660',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Comfort'
		]);	
		//24, haiti
		DB::table('towns')->insert([
			'town_name' => 'Port de Paix',
			'country' => '5',
			'colony' => '8',
			'xcoord' => '2238',
			'ycoord' => '1227',
			'foundation' => '1665',
			'category_size' => 'capital',
			'plantation' => 'coffee',
			'factory' => 'luxuries',
			'population' => '4500',
			'guards' => '500',
			'fort' => 'Fort des Trois Pavillions'
		]);	
		//25, haiti
		DB::table('towns')->insert([
			'town_name' => 'Petit Goave',
			'country' => '5',
			'colony' => '8',
			'xcoord' => '2282',
			'ycoord' => '1355',
			'foundation' => '1663',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1200',
			'guards' => '200',
			'fort' => 'Fort Jacques'
		]);			
		//spanish towns
		//26, hispaniola
		DB::table('towns')->insert([
			'town_name' => 'Santo Domingo',
			'country' => '6',
			'colony' => '9',
			'xcoord' => '2494',
			'ycoord' => '1365',
			'foundation' => '1496',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//27, puerto rico
		DB::table('towns')->insert([
			'town_name' => 'San Juan',
			'country' => '6',
			'colony' => '10',
			'xcoord' => '2828',
			'ycoord' => '1366',
			'foundation' => '1493',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Segarra'
		]);	
		//28, cuba
		DB::table('towns')->insert([
			'town_name' => 'Havana',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '1399',
			'ycoord' => '924',
			'foundation' => '1519',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort de los Tres Reyes'
		]);	
		//29, cuba
		DB::table('towns')->insert([
			'town_name' => 'Santiago',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '1976',
			'ycoord' => '1225',
			'foundation' => '1515',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//30, cuba
		DB::table('towns')->insert([
			'town_name' => 'Baracoa',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '2094',
			'ycoord' => '1189',
			'foundation' => '1511',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//31, florida, cuba
		DB::table('towns')->insert([
			'town_name' => 'Saint Augustine',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '1498',
			'ycoord' => '263',
			'foundation' => '1565',
			'category_size' => 'town',
			'plantation' => 'naval stores',
			'factory' => 'goods',
			'population' => '1200',
			'guards' => '200',
			'fort' => 'Fort Caroline'
		]);	
		//32, florida, cuba
		DB::table('towns')->insert([
			'town_name' => 'Pensacola',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '975',
			'ycoord' => '209',
			'foundation' => '1559',
			'category_size' => 'town',
			'plantation' => 'cotton',
			'factory' => 'cloth',
			'population' => '1500',
			'guards' => '300',
			'fort' => 'Fort George'
		]);	
		//33, mexico
		DB::table('towns')->insert([
			'town_name' => 'Veracruz',
			'country' => '6',
			'colony' => '12',
			'xcoord' => '195',
			'ycoord' => '1294',
			'foundation' => '1519',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Juan'
		]);	
		//34, mexico
		DB::table('towns')->insert([
			'town_name' => 'Tampico',
			'country' => '6',
			'colony' => '12',
			'xcoord' => '49',
			'ycoord' => '1007',
			'foundation' => '1532',
			'category_size' => 'village',
			'plantation' => 'silver',
			'factory' => 'goods',
			'population' => '200'
		]);	
		//35, yucatan
		DB::table('towns')->insert([
			'town_name' => 'Campeche',
			'country' => '6',
			'colony' => '13',
			'xcoord' => '684',
			'ycoord' => '1234',
			'foundation' => '1526',
			'category_size' => 'capital',
			'plantation' => 'salt',
			'factory' => 'luxuries',
			'population' => '2500',
			'guards' => '300',
			'fort' => 'Fort Miguel'
		]);		
		//36, guatemala
		DB::table('towns')->insert([
			'town_name' => 'Trujillo',
			'country' => '6',
			'colony' => '14',
			'xcoord' => '1087',
			'ycoord' => '1599',
			'foundation' => '1524',
			'category_size' => 'capital',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Barbara'
		]);	
		//37, guatemala
		DB::table('towns')->insert([
			'town_name' => 'Omoa',
			'country' => '6',
			'colony' => '14',
			'xcoord' => '907',
			'ycoord' => '1611',
			'foundation' => '1536',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Fernando'
		]);	
		//38, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Cartagena',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '1999',
			'ycoord' => '2094',
			'foundation' => '1533',
			'category_size' => 'capital',
			'plantation' => 'silver',
			'factory' => 'luxuries',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//39, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Puerto Bello',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '1640',
			'ycoord' => '2172',
			'foundation' => '1597',
			'category_size' => 'town',
			'plantation' => 'silver',
			'factory' => 'goods',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Lorenzo'
		]);	
		//40, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Nombre de Dios',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '1733',
			'ycoord' => '2184',
			'foundation' => '1540',
			'category_size' => 'town',
			'plantation' => 'silver',
			'factory' => 'goods',
			'population' => '1000',
			'guards' => '200',
			'fort' => 'Fort Real'
		]);
		//41, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Santa Marta',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '2117',
			'ycoord' => '2020',
			'foundation' => '1525',
			'category_size' => 'town',
			'plantation' => 'coffee',
			'factory' => 'goods',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//42, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Rio de la Hacha',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '2231',
			'ycoord' => '1992',
			'foundation' => '1535',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'luxuries',
			'population' => '2000',
			'guards' => '300',
			'fort' => 'Fort Real'
		]);
		//43, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Maracaibo',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '2344',
			'ycoord' => '2064',
			'foundation' => '1529',
			'category_size' => 'town',
			'plantation' => 'coffee',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//44, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Puerto Cabello',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '2659',
			'ycoord' => '2088',
			'foundation' => '1578',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'luxuries',
			'population' => '2000',
			'guards' => '300',
			'fort' => 'Fort Real'
		]);	
		//45, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Caracas',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '2751',
			'ycoord' => '2077',
			'foundation' => '1567',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);
		//46, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Cumana',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '2997',
			'ycoord' => '2090',
			'foundation' => '1515',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);			
		//47, margarita, new granada
		DB::table('towns')->insert([
			'town_name' => 'Porlamar',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '3027',
			'ycoord' => '2047',
			'foundation' => '1536',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//48, trinidad, new granada
		DB::table('towns')->insert([
			'town_name' => 'Port au Spain',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '3233',
			'ycoord' => '2074',
			'foundation' => '1560',
			'category_size' => 'capital',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Fort George'
		]);			
		//danish towns
		//49, charlotte amelie, st. thomas, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Taphus',
			'country' => '7',
			'colony' => '16',
			'xcoord' => '2933',
			'ycoord' => '1376',
			'foundation' => '1666',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1800',
			'guards' => '300',
			'fort' => 'Fort Christian'
		]);	
		//50, st. john, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Cruz Bay',
			'country' => '7',
			'colony' => '16',
			'xcoord' => '2946',
			'ycoord' => '1377',
			'foundation' => '1673',
			'category_size' => 'village',
			'plantation' => 'cotton',
			'factory' => 'cloth',
			'population' => '200'
		]);	
		//51, st. john, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Coral Bay',
			'country' => '7',
			'colony' => '16',
			'xcoord' => '2954',
			'ycoord' => '1375',
			'foundation' => '1673',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '300',
			'guards' => '80',
			'fort' => 'Fort Frederik'
		]);	
		//curonian towns
		//52, tobago, new courland
		DB::table('towns')->insert([
			'town_name' => 'Jacobsstadt',
			'country' => '8',
			'colony' => '17',
			'xcoord' => '3305',
			'ycoord' => '2024',
			'foundation' => '1658',
			'category_size' => 'capital',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '500',
			'guards' => '150',
			'fort' => 'Fort Jacobus'
		]);	
		//hospitaller towns
		//53, st. kitts
		DB::table('towns')->insert([
			'town_name' => 'Basseterre',
			'country' => '9',
			'colony' => '18',
			'xcoord' => '3125',
			'ycoord' => '1472',
			'foundation' => '1639',
			'category_size' => 'capital',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1500',
			'guards' => '300',
			'fort' => 'Fort Charles'
		]);	
		//54, st. barths
		DB::table('towns')->insert([
			'town_name' => 'Carenage',
			'country' => '9',
			'colony' => '18',
			'xcoord' => '3117',
			'ycoord' => '1415',
			'foundation' => '1648',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '900',
			'guards' => '200',
			'fort' => 'Fort Oscar'
		]);	
		//55, st. croix, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Croix',
			'country' => '9',
			'colony' => '18',
			'xcoord' => '2948',
			'ycoord' => '1434',
			'foundation' => '1695',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);			
		
    }
}
