<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('product_id', true);
			$table->integer('menu_id');
			$table->integer('product_category_id');
			$table->integer('product_name_id');
			$table->text('product_name');
			$table->text('description', 65535);
			$table->text('price');
			$table->text('price_ex_gst', 65535);
			$table->text('price_gst', 65535);
			$table->text('discount', 65535);
			$table->text('discount_ex_gst', 65535);
			$table->text('discount_gst', 65535);
			$table->integer('actual_price');
			$table->text('actual_price_ex_gst', 65535);
			$table->text('actual_price_gst', 65535);
			$table->text('actual_gst', 65535);
			$table->integer('delivery_charge');
			$table->char('offers', 1)->default(0);
			$table->char('feature_products', 1)->default(0);
			$table->char('best_selling', 1)->default(0);
			$table->char('home', 1)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
