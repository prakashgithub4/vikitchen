<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductDetailsColourTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_details_colour', function(Blueprint $table)
		{
			$table->integer('product_details_colour_id', true);
			$table->integer('product_id');
			$table->integer('product_colour_id');
			$table->integer('default_colour');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_details_colour');
	}

}
