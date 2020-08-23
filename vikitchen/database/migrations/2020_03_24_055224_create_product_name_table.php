<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductNameTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_name', function(Blueprint $table)
		{
			$table->integer('product_name_id', true);
			$table->integer('menu_id');
			$table->integer('product_category_id');
			$table->text('product_name', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_name');
	}

}
