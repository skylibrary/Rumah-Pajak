<?php
/**
 * Created by PhpStorm.
 * User: Eldwin
 * Date: 4/6/2015
 * Time: 6:19 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class permintaanWP  extends Model {
    protected $table = 'permintaan_wp';
	protected $fillable = [
		'NPWP_peminta',
		'kategori_permintaan',
		'detil_permintaan'
	];
}