<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWajibPajakTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('WajibPajak', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('nama');
            $table->integer('KelebihanPajak');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('WajibPajak');
	}

}
