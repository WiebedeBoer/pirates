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
		//pirate towns, 8 towns, 3 colonies
		//1, jamaica
		DB::table('towns')->insert([
			'town_name' => 'Port Royal',
			'country' => '1',
			'colony' => '1',
			'xcoord' => '1889',
			'ycoord' => '1413',
			'foundation' => '1494',
			'category_size' => 'city',
			'plantation' => 'cocoa',
			'factory' => 'luxuries',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Charles'
		]);
		//2, jamaica
		DB::table('towns')->insert([
			'town_name' => 'Montego Bay',
			'country' => '1',
			'colony' => '1',
			'xcoord' => '1790',
			'ycoord' => '1365',
			'foundation' => '1511',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'luxuries',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort Montego'
		]);	
		//3, cayman islands, jamaica
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
		//4, belize, honduras
		DB::table('towns')->insert([
			'town_name' => 'Belize',
			'country' => '1',
			'colony' => '2',
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
		//5, belize, honduras
		DB::table('towns')->insert([
			'town_name' => 'Belize',
			'country' => '1',
			'colony' => '2',
			'xcoord' => '892',
			'ycoord' => '1280',
			'foundation' => '1957',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '400',
			'guards' => '80',
			'fort' => 'Fort Bay'
		]);	
		//6, yucatan, jamaica, belize, honduras
		DB::table('towns')->insert([
			'town_name' => 'Carmen',
			'country' => '1',
			'colony' => '2',
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
		//7, roatan, bay islands, belize, honduras
		DB::table('towns')->insert([
			'town_name' => 'Coxen Hole',
			'country' => '1',
			'colony' => '2',
			'xcoord' => '1035',
			'ycoord' => '1562',
			'foundation' => '1643',
			'category_size' => 'town',
			'plantation' => 'salt',
			'factory' => 'cloth',
			'population' => '500',
			'guards' => '80',
			'fort' => 'Fort Linwell'
		]);			
		//8, tortuga, haiti, tortuga
		DB::table('towns')->insert([
			'town_name' => 'Tortuga',
			'country' => '1',
			'colony' => '3',
			'xcoord' => '2250',
			'ycoord' => '1221',
			'foundation' => '1625',
			'category_size' => 'town',
			'plantation' => 'tobacco',
			'factory' => 'cloth',
			'population' => '2500',
			'guards' => '400',
			'fort' => 'Fort de Rocher'
		]);
		//buccaneer towns, 2 towns, 1 colony
		//9, new providence, bahamas
		DB::table('towns')->insert([
			'town_name' => 'Nassau',
			'country' => '2',
			'colony' => '4',
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
		//10, eleuthera, bahamas
		DB::table('towns')->insert([
			'town_name' => 'Governors Harbour',
			'country' => '2',
			'colony' => '4',
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
		//dutch towns, 6 towns, 2 colonies
		//11, curacao, leeward
		DB::table('towns')->insert([
			'town_name' => 'Willemstad',
			'country' => '3',
			'colony' => '5',
			'xcoord' => '2582',
			'ycoord' => '1944',
			'foundation' => '1634',
			'category_size' => 'town',
			'plantation' => 'salt',
			'factory' => 'goods',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Amsterdam'
		]);	
		//12, aruba, leeward
		DB::table('towns')->insert([
			'town_name' => 'Oranjestad',
			'country' => '3',
			'colony' => '5',
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
		//13, bonaire, leeward
		DB::table('towns')->insert([
			'town_name' => 'Playa',
			'country' => '3',
			'colony' => '5',
			'xcoord' => '2639',
			'ycoord' => '1939',
			'foundation' => '1639',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '300',
			'guards' => '60',
			'fort' => 'Fort Oranje'
		]);
		//14, st. eustatius, windward
		DB::table('towns')->insert([
			'town_name' => 'Oranjestad',
			'country' => '3',
			'colony' => '6',
			'xcoord' => '3105',
			'ycoord' => '1456',
			'foundation' => '1636',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '300',
			'guards' => '60',
			'fort' => 'Fort Oranje'
		]);	
		//15, st. martin, windward
		DB::table('towns')->insert([
			'town_name' => 'Philipsburg',
			'country' => '3',
			'colony' => '6',
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
		//16, saba, windward
		DB::table('towns')->insert([
			'town_name' => 'De Botte',
			'country' => '3',
			'colony' => '6',
			'xcoord' => '3082',
			'ycoord' => '1442',
			'foundation' => '1640',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);
		//english towns, 7 towns, 2	colonies		
		//17, antigua, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Johns',
			'country' => '4',
			'colony' => '7',
			'xcoord' => '3204',
			'ycoord' => '1485',
			'foundation' => '1632',
			'category_size' => 'town',
			'plantation' => 'spices',
			'factory' => 'luxuries',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort James'
		]);	
		//18, barbuda, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Codrington',
			'country' => '4',
			'colony' => '7',
			'xcoord' => '3206',
			'ycoord' => '1445',
			'foundation' => '1667',
			'category_size' => 'village',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '200'
		]);
		//19, anguilla, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'The Valley',
			'country' => '4',
			'colony' => '7',
			'xcoord' => '3096',
			'ycoord' => '1386',
			'foundation' => '1667',
			'category_size' => 'village',
			'plantation' => 'tobacco',
			'factory' => 'luxuries',
			'population' => '200'
		]);
		//20, turks and caicos islands, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Cockburn Town',
			'country' => '4',
			'colony' => '7',
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
		//21, montserrat, leewards islands
		DB::table('towns')->insert([
			'town_name' => 'Plymouth',
			'country' => '4',
			'colony' => '7',
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
		//22, barbados, windward islands
		DB::table('towns')->insert([
			'town_name' => 'Bridgetown',
			'country' => '4',
			'colony' => '8',
			'xcoord' => '3399',
			'ycoord' => '1854',
			'foundation' => '1628',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '5000',
			'guards' => '500',
			'fort' => 'Fort Charles'
		]);	
		//23, grenada, windward islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Georges',
			'country' => '4',
			'colony' => '8',
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
		//french towns, 7 towns, 2 colonies
		//24, martinique
		DB::table('towns')->insert([
			'town_name' => 'Saint Pierre',
			'country' => '5',
			'colony' => '9',
			'xcoord' => '3262',
			'ycoord' => '1704',
			'foundation' => '1638',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '4000',
			'guards' => '500',
			'fort' => 'Fort de France'
		]);	
		//25, guadeloupe
		DB::table('towns')->insert([
			'town_name' => 'Pointe a Pitre',
			'country' => '5',
			'colony' => '9',
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
		//26, marie galante, guadeloupe
		DB::table('towns')->insert([
			'town_name' => 'Grand Bourg',
			'country' => '5',
			'colony' => '9',
			'xcoord' => '3253',
			'ycoord' => '1591',
			'foundation' => '1653',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '500',
			'guards' => '80',
			'fort' => 'Vieux Fort'
		]);
		//27, st. lucia
		DB::table('towns')->insert([
			'town_name' => 'Castries',
			'country' => '5',
			'colony' => '9',
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
		//28, dominica
		DB::table('towns')->insert([
			'town_name' => 'Roseau',
			'country' => '5',
			'colony' => '9',
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
		//29, haiti
		DB::table('towns')->insert([
			'town_name' => 'Port de Paix',
			'country' => '5',
			'colony' => '10',
			'xcoord' => '2238',
			'ycoord' => '1227',
			'foundation' => '1665',
			'category_size' => 'town',
			'plantation' => 'coffee',
			'factory' => 'luxuries',
			'population' => '4500',
			'guards' => '500',
			'fort' => 'Fort des Trois Pavillions'
		]);	
		//30, haiti
		DB::table('towns')->insert([
			'town_name' => 'Petit Goave',
			'country' => '5',
			'colony' => '10',
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
		//spanish towns, 25 towns, 7 colonies
		//31, hispaniola
		DB::table('towns')->insert([
			'town_name' => 'Santo Domingo',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '2494',
			'ycoord' => '1365',
			'foundation' => '1496',
			'category_size' => 'city',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//32, hispaniola
		DB::table('towns')->insert([
			'town_name' => 'Puerto Plata',
			'country' => '6',
			'colony' => '11',
			'xcoord' => '2425',
			'ycoord' => '1240',
			'foundation' => '1496',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '2500',
			'guards' => '400',
			'fort' => 'Fort Felipe'
		]);	
		//33, puerto rico
		DB::table('towns')->insert([
			'town_name' => 'San Juan',
			'country' => '6',
			'colony' => '12',
			'xcoord' => '2828',
			'ycoord' => '1366',
			'foundation' => '1493',
			'category_size' => 'city',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Segarra'
		]);	
		//34, puerto rico
		DB::table('towns')->insert([
			'town_name' => 'Ponce',
			'country' => '6',
			'colony' => '12',
			'xcoord' => '2782',
			'ycoord' => '1409',
			'foundation' => '1670',
			'category_size' => 'village',
			'plantation' => 'meat',
			'factory' => 'cloth',
			'population' => '200'
		]);	
		//35, cuba
		DB::table('towns')->insert([
			'town_name' => 'Havana',
			'country' => '6',
			'colony' => '13',
			'xcoord' => '1399',
			'ycoord' => '924',
			'foundation' => '1519',
			'category_size' => 'city',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort de los Tres Reyes'
		]);	
		//36, cuba
		DB::table('towns')->insert([
			'town_name' => 'Santiago',
			'country' => '6',
			'colony' => '13',
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
		//37, cuba
		DB::table('towns')->insert([
			'town_name' => 'Baracoa',
			'country' => '6',
			'colony' => '13',
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
		//38, florida, cuba
		DB::table('towns')->insert([
			'town_name' => 'Saint Augustine',
			'country' => '6',
			'colony' => '13',
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
		//39, florida, cuba
		DB::table('towns')->insert([
			'town_name' => 'Pensacola',
			'country' => '6',
			'colony' => '13',
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
		//40, mexico
		DB::table('towns')->insert([
			'town_name' => 'Veracruz',
			'country' => '6',
			'colony' => '14',
			'xcoord' => '195',
			'ycoord' => '1294',
			'foundation' => '1519',
			'category_size' => 'city',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Juan'
		]);	
		//41, mexico
		DB::table('towns')->insert([
			'town_name' => 'Tampico',
			'country' => '6',
			'colony' => '14',
			'xcoord' => '49',
			'ycoord' => '1007',
			'foundation' => '1532',
			'category_size' => 'village',
			'plantation' => 'silver',
			'factory' => 'goods',
			'population' => '200'
		]);	
		//42, yucatan
		DB::table('towns')->insert([
			'town_name' => 'Campeche',
			'country' => '6',
			'colony' => '15',
			'xcoord' => '684',
			'ycoord' => '1234',
			'foundation' => '1526',
			'category_size' => 'town',
			'plantation' => 'salt',
			'factory' => 'luxuries',
			'population' => '2500',
			'guards' => '300',
			'fort' => 'Fort Miguel'
		]);		
		//43, guatemala
		DB::table('towns')->insert([
			'town_name' => 'Trujillo',
			'country' => '6',
			'colony' => '16',
			'xcoord' => '1087',
			'ycoord' => '1599',
			'foundation' => '1524',
			'category_size' => 'town',
			'plantation' => 'meat',
			'factory' => 'goods',
			'population' => '3000',
			'guards' => '500',
			'fort' => 'Fort Barbara'
		]);	
		//44, guatemala
		DB::table('towns')->insert([
			'town_name' => 'Omoa',
			'country' => '6',
			'colony' => '16',
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
		//45, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Cartagena',
			'country' => '6',
			'colony' => '17',
			'xcoord' => '1999',
			'ycoord' => '2094',
			'foundation' => '1533',
			'category_size' => 'city',
			'plantation' => 'silver',
			'factory' => 'luxuries',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);	
		//46, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Puerto Bello',
			'country' => '6',
			'colony' => '17',
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
		//47, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Nombre de Dios',
			'country' => '6',
			'colony' => '17',
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
		//48, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Santa Marta',
			'country' => '6',
			'colony' => '17',
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
		//49, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Rio de la Hacha',
			'country' => '6',
			'colony' => '17',
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
		//50, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Maracaibo',
			'country' => '6',
			'colony' => '17',
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
		//51, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Puerto Cabello',
			'country' => '6',
			'colony' => '17',
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
		//52, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Caracas',
			'country' => '6',
			'colony' => '17',
			'xcoord' => '2751',
			'ycoord' => '2077',
			'foundation' => '1567',
			'category_size' => 'city',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '6500',
			'guards' => '500',
			'fort' => 'Fort Real'
		]);
		//53, venezuela, new granada
		DB::table('towns')->insert([
			'town_name' => 'Cumana',
			'country' => '6',
			'colony' => '17',
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
		//54, margarita, new granada
		DB::table('towns')->insert([
			'town_name' => 'Porlamar',
			'country' => '6',
			'colony' => '17',
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
		//55, trinidad, new granada
		DB::table('towns')->insert([
			'town_name' => 'Port au Spain',
			'country' => '6',
			'colony' => '17',
			'xcoord' => '3233',
			'ycoord' => '2074',
			'foundation' => '1560',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '3500',
			'guards' => '500',
			'fort' => 'Fort George'
		]);			
		//danish towns, 3 towns, 1 colony
		//56, charlotte amelie, st. thomas, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Taphus',
			'country' => '7',
			'colony' => '18',
			'xcoord' => '2933',
			'ycoord' => '1376',
			'foundation' => '1666',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1800',
			'guards' => '300',
			'fort' => 'Fort Christian'
		]);	
		//57, st. john, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Cruz Bay',
			'country' => '7',
			'colony' => '18',
			'xcoord' => '2946',
			'ycoord' => '1377',
			'foundation' => '1673',
			'category_size' => 'village',
			'plantation' => 'cotton',
			'factory' => 'cloth',
			'population' => '200'
		]);	
		//58, st. john, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Coral Bay',
			'country' => '7',
			'colony' => '18',
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
		//curonian towns, 1 town, 1 colony
		//59, tobago, new courland
		DB::table('towns')->insert([
			'town_name' => 'Jacobsstadt',
			'country' => '8',
			'colony' => '19',
			'xcoord' => '3305',
			'ycoord' => '2024',
			'foundation' => '1658',
			'category_size' => 'town',
			'plantation' => 'cocoa',
			'factory' => 'goods',
			'population' => '500',
			'guards' => '150',
			'fort' => 'Fort Jacobus'
		]);	
		//hospitaller towns, 3 towns, 1 colony
		//60, st. kitts
		DB::table('towns')->insert([
			'town_name' => 'Basseterre',
			'country' => '9',
			'colony' => '20',
			'xcoord' => '3125',
			'ycoord' => '1472',
			'foundation' => '1639',
			'category_size' => 'town',
			'plantation' => 'sugar',
			'factory' => 'rum',
			'population' => '1500',
			'guards' => '300',
			'fort' => 'Fort Charles'
		]);	
		//61, st. barths
		DB::table('towns')->insert([
			'town_name' => 'Carenage',
			'country' => '9',
			'colony' => '20',
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
		//62, st. croix, virgin islands
		DB::table('towns')->insert([
			'town_name' => 'Saint Croix',
			'country' => '9',
			'colony' => '20',
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
