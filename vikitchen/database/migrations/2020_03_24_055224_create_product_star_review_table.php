<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductStarReviewTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_star_review', function(Blueprint $table)
		{
			$table->integer('product_star_review_id', true);
			$table->integer('product_id');
			$table->text('star', 65535);
			$table->date('review_date');
			$table->text('summury', 65535);
			$table->text('review');
			$table->text('review_by', 65535);
			$table->integer('web_user_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_star_review');
	}

}
