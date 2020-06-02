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
			$table->integer('xcoord')->default(1);
			$table->integer('ycoord')->default(1);
			//foundation
			$table->integer('foundation')->default(1500);
			//size
			$table->string('category_size')->default('town');
			//plantation
			$table->string('plantation')->default('none');
			//factory
			$table->string('factory')->default('none');
			//population
			$table->integer('population')->default(1000);
			//soldiers
			$table->integer('guards')->default(1);
			$table->integer('recruits')->default(1);
			//fort
			$table->string('fort')->default('none');
			//plantation
			$table->integer('sugar')->default(0);
			$table->integer('spices')->default(0);
			$table->integer('cocoa')->default(0);
			$table->integer('tobacco')->default(0);
			$table->integer('coffee')->default(0);
			$table->integer('cotton')->default(0);
			$table->integer('naval_stores')->default(0);
			//mining
			$table->integer('salt')->default(0);
			$table->integer('silver')->default(0);
			//farm
			$table->integer('meat')->default(0);
			$table->integer('fruits')->default(0);
			//production
			$table->integer('cloth')->default(0);		
			$table->integer('goods')->default(0);
			$table->integer('luxuries')->default(0);
			$table->integer('rum')->default(0);
			//weaponry
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
