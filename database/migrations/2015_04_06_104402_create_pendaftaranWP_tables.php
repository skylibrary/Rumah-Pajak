<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePendaftaranWPTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pendaftaran_WP', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
            $table->string('nama');
            $table->string('alamat');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->enum('status_perkawinan',['Sudah Kawin','Belum Kawin']);
            $table->enum('pekerjaan',['Mahasiswa/Pelajar','Pegawai Swasta','Pegawai Negri']);
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pendaftaran_WP');
	}

}
