<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCourierServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courier_services', function(Blueprint $table)
		{
			$table->integer('courier_services_id', true);
			$table->text('courier_services_name', 65535);
			$table->text('address', 65535);
			$table->text('contact_person_name', 65535);
			$table->text('contact_no', 65535);
			$table->text('email', 65535);
			$table->text('website', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('courier_services');
	}

}
