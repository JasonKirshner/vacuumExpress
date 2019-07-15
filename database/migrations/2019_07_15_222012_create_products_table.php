<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('ProductName', 50)->nullable();
			$table->string('Description', 250)->nullable();
			$table->float('Price', 50)->nullable();
			$table->integer('Quantity')->nullable();
			$table->string('ImageName', 250)->nullable();
			$table->float('SalePrice', 50)->default(0.00);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
