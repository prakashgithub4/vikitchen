<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReturnProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('return_product', function(Blueprint $table)
		{
			$table->integer('return_product_id', true);
			$table->integer('web_user_id');
			$table->integer('invoice_no_id');
			$table->char('refund_mode', 1);
			$table->text('bank_name', 65535);
			$table->text('branch_name', 65535);
			$table->text('ifsc_code', 65535);
			$table->text('acc_holder_name', 65535);
			$table->text('acc_no', 65535);
			$table->text('amount', 65535);
			$table->text('description');
			$table->date('return_date');
			$table->char('refund_status', 1)->default(1);
			$table->date('refund_date');
			$table->date('product_received_date');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('return_product');
	}

}
