<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePhonenumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('phonenumbers', function(Blueprint $table)
		{
			$table->integer('PersonID');
			$table->string('PhoneType', 10)->nullable();
			$table->string('PhoneNum', 8)->nullable();
			$table->string('AreaCode', 3)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('phonenumbers');
	}

}
