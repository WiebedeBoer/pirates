<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTownsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towns', function (Blueprint $table) {
            $table->bigIncrements('town_id');
			$table->string('town_name');
			//fk
			$table->unsignedBigInteger('country')->nullable();
			$table->unsignedBigInteger('colony')->nullable();
			//coordinates
			$table->integer('xcoord');
			$table->integer('ycoord');
			//foundation
			$table->integer('foundation');
			//size
			$table->string('category_size');
			//population
			$table->integer('population');
			//soldiers
			$table->integer('guards')->default(1);
			$table->integer('recruits')->default(1);
			//fort
			$table->string('fort')->default('none');
			//plantation culture
			$table->string('sugarcane_plantation')->default('none'); //37 sugarcane
			$table->string('spices_plantation')->default('none'); //5 spices
			$table->string('cocoa_plantation')->default('none'); //15 cocoa
			$table->string('tobacco_plantation')->default('none'); //13 tobacco
			$table->string('coffee_plantation')->default('none'); //16 coffee
			$table->string('cotton_plantation')->default('none'); //12 cotton
			$table->string('dyes_plantation')->default('none'); //12 indigo
			//farming culture
			$table->string('farming')->default('none'); //49 fruits, 15 meat
			//mill culture
			$table->string('mill')->default('none'); //10 wood, 17 textiles, 16 grist
			//mining culture
			$table->string('mining')->default('none'); //4 copper, 6 salt, 5 silver
			//factory culture
			$table->string('factory')->default('none'); //15 calico, 27 goods, 5 jewelry, 10 leatherwork, 7 pottery
			//distillery culture
			$table->string('distillery')->default('none'); //37 rum
			//plantation production
			$table->integer('sugar')->default(0);
			$table->integer('spices')->default(0);
			$table->integer('cocoa')->default(0);
			$table->integer('tobacco')->default(0);
			$table->integer('coffee')->default(0);
			$table->integer('cotton')->default(0);
			$table->integer('dyes')->default(0);
			//mill production
			$table->integer('wood')->default(0);
			$table->integer('textiles')->default(0);
			//mining production
			$table->integer('copper')->default(0);
			$table->integer('salt')->default(0);
			$table->integer('silver')->default(0);
			//farm production
			$table->integer('corn')->default(0);
			$table->integer('meat')->default(0);
			$table->integer('fruits')->default(0);
			//factory production				
			$table->integer('goods')->default(0);
			$table->integer('leatherwork')->default(0);
			$table->integer('jewelry')->default(0);
			$table->integer('pottery')->default(0);
			//distillery production
			$table->integer('rum')->default(0);
			//weaponry production
			$table->integer('guns')->default(0);
			$table->integer('pistols')->default(0);
			$table->integer('swords')->default(0);
			//timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('towns');
    }
}
