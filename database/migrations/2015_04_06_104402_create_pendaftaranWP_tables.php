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
            $table->string('Nama');
            $table->string('Alamat');
            $table->string('Tempat lahir');
            $table->string('Tanggal lahir');
            $table->enum('Status Perkawinan',['Sudah Kawin','Belum Kawin']);
            $table->enum('Pekerjaan',['Mahasiswa/Pelajar','Pegawai Swasta','Pegawai Negri']);
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
