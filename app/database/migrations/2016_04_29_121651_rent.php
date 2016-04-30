<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rent extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rent', function(Blueprint $table)
		{
			$table->double('rent',25,8);
			$table->double('cash',25,8);
			$table->double('loan',25,8);
			$table->date('payDate');
			$table->string('shop_id');
			$table->foreign('shop_id')->references('id')->on('shop');
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
		Schema::drop('rent');
	}

}
