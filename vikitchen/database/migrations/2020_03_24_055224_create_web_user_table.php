<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_user', function(Blueprint $table)
		{
			$table->integer('web_user_id', true);
			$table->text('name', 65535);
			$table->text('contact_no', 65535);
			$table->text('email', 65535);
			$table->text('password', 65535);
			$table->text('state', 65535);
			$table->text('city', 65535);
			$table->text('address', 65535);
			$table->text('pinno', 65535);
			$table->text('browser_id', 65535);
			$table->integer('wallet_amt');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('web_user');
	}

}
