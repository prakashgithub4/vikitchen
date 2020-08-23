<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoiceNoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invoice_no', function(Blueprint $table)
		{
			$table->integer('invoice_no_id', true);
			$table->text('invoice_no', 65535);
			$table->text('total_amt', 65535);
			$table->char('status', 1)->default(1);
			$table->date('status_date');
			$table->integer('web_user_id');
			$table->date('invoice_date');
			$table->date('cancel_date')->default('0000-00-00');
			$table->char('payment_mode', 1)->default(0);
			$table->char('payment_status', 1)->default(0);
			$table->string('transaction_id')->default('0');
			$table->char('use_wallet', 1)->default(0);
			$table->integer('use_wallet_amt')->default(0);
			$table->text('browser_id', 65535);
			$table->char('cancel', 1)->default(0);
			$table->integer('courier_services_id')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invoice_no');
	}

}
