<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\pendaftaranWP;
use App\WajibPajak;
class pendaftaranWPController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$daftarWP = pendaftaranWP::get();
        return view('pages.daftarWP',compact('daftarWP'));
	}

    public function setuju($id)
    {
        $daftarWP = pendaftaranWP::get();
        $tmp = new WajibPajak();
        $tmp->nama=pendaftaranWP::get()->find($id)->nama;
        $tmp->save();
        //WajibPajak::create(['nama' => pendaftaranWP::get()->find($id)->nama]);
        $daftarWP ->find($id)->delete();
        return view('pages.daftarWPnotif');
    }
    public function tolak($id)
    {
        $daftarWP = pendaftaranWP::get();
        $daftarWP ->find($id)->delete();
        return view('pages.daftarWPnotif');
    }
}
