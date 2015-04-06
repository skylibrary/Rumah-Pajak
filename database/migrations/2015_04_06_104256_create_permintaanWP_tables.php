<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaanWPTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permintaan_WP', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->enum('KategoriPermintaan',['Pencabutan WP','Keberatan Pajak']);
            $table->string('DetilPermintaan');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('permintaan_WP');
	}

}
