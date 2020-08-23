<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOfferTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offer', function(Blueprint $table)
		{
			$table->integer('offer_id', true);
			$table->text('image', 65535);
			$table->text('title', 65535);
			$table->text('description', 65535);
			$table->text('url', 65535);
			$table->char('cat', 1)->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('offer');
	}

}
