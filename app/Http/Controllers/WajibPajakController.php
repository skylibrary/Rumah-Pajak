<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\WajibPajak;
use App\pendaftaranWP;
class WajibPajakController extends Controller {

    public function input($id){
        WajibPajak::insert('insert into users (nama) values (?)', [pendaftaranWP::get()->find($id)->nama]);
    }
}
