<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductDetailsSizeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_details_size', function(Blueprint $table)
		{
			$table->integer('product_details_size_id', true);
			$table->integer('product_id');
			$table->integer('product_colour_id');
			$table->integer('product_size_id');
			$table->text('stock', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_details_size');
	}

}
