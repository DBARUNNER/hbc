<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shop extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shopBlock', function(Blueprint $table)
		{
			$table->string('id');
			$table->primary('id');
			$table->string('location');
			$table->double('rent',25,8);
			$table->double('prepay',25,8);
			$table->string('type');
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
		Schema::drop('shopBlock');
	}

}
