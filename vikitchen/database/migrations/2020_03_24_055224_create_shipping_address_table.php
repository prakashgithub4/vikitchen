<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipping_address', function(Blueprint $table)
		{
			$table->integer('shipping_address_id', true);
			$table->integer('invoice_no_id');
			$table->text('name', 65535);
			$table->text('contact_no', 65535);
			$table->text('email', 65535);
			$table->text('state', 65535);
			$table->text('city', 65535);
			$table->text('pin_no', 65535);
			$table->text('address', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shipping_address');
	}

}
