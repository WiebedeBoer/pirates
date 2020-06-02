<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //foreign keys
		$this->call('fkSeeder');
		//countries
		$this->call('CountrySeeder');
		//colonies
		$this->call('ColonySeeder');
		//towns
		$this->call('TownSeeder');
    }
}

class fkSeeder extends Seeder
{
	//foreign keys
    public function run()
    {
		//colonies
		Schema::table('colonies', function (Blueprint $table) {
			$table->foreign('country')->references('country_id')->on('countries');		
        });	
		//towns
		Schema::table('towns', function (Blueprint $table) {
			$table->foreign('country')->references('country_id')->on('countries');	
			$table->foreign('colony')->references('colony_id')->on('colonies');	
        });
		
	}
	
}
