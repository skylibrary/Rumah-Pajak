<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\pendaftaranWP;

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
        Controller::call('WajibPajakController@input');
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
