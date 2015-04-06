<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\pendaftaranWP;
use Io

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
        App::make('WajibPajakController')->input($id);
        $daftarWP ->find($id)->delete();
        return view('pages.daftarWPnotif');
    }
    public function delete($id)
    {



    }
}
