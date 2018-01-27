<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriaProdutosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('categoria__produtos', function(Blueprint $table)
		{
			$table->integer('categoria_id')->unsigned()->nullable();
      		$table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');

      		$table->integer('produto_id')->unsigned()->nullable();
      		$table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('categoria__produtos');
	}

}
