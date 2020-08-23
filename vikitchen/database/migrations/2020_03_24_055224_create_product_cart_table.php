<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_cart', function(Blueprint $table)
		{
			$table->integer('product_cart_id', true);
			$table->integer('product_id');
			$table->integer('product_size_id');
			$table->integer('product_colour_id');
			$table->text('qty', 65535);
			$table->text('price', 65535);
			$table->text('delivery_charge', 65535);
			$table->char('buy_now', 1)->default(0);
			$table->integer('web_user_id');
			$table->integer('invoice_no_id');
			$table->text('browser_id', 65535);
			$table->char('cancel', 1)->default(0);
			$table->text('cancel_browser_id', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_cart');
	}

}
