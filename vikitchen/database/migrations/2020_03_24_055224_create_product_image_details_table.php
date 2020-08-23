<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductImageDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_image_details', function(Blueprint $table)
		{
			$table->integer('product_image_details_id', true);
			$table->integer('product_id');
			$table->integer('product_details_colour_id');
			$table->integer('product_colour_id');
			$table->text('image', 65535);
			$table->char('default_image', 1)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_image_details');
	}

}
