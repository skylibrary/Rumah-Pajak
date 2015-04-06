<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.daftarWP');
    }

    public function about()
    {

    }

    public function ajuanWP()
    {
        return view('pages.ajuanWP');
    }

    public function daftarWP()
    {
        return view('pages.daftarWP');
    }
}
