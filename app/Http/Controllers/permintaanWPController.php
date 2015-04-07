<?php namespace App\Http\Controllers;

use App\permintaanWP;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class permintaanWPController extends Controller {
	public function ajuMinta($id){
		//$npwp='12345ABCD';
		$npwp=$id;
		return view('pages.ajumintaWP',compact('npwp'));
	}
	
	public function seeMinta($id){
		//$npwp='12345ABCD';
		$npwp=$id;
		$daftarminta = permintaanWP
		::where('NPWP_peminta',$npwp)
		->orderBy('updated_at','desc')
		->get()
		;
		return view('pages.cekmintaWP',compact('daftarminta','npwp'));
	}
	
	public function cekMinta(){
		$daftarminta = permintaanWP
		::orderBy('status_permintaan','asc')
		->latest()
		->get();
		return view('pages.cekmintaPetugas',compact('daftarminta'));
	}
	
	public function add($id){
		permintaanWP::create(Request::all());
		return redirect('minta/see/'.$id);
	}
	
	public function setuju($id){
		$minta = permintaanWP::findOrFail($id);
		$minta->status_permintaan='Disetujui';
		$minta->save();
		return redirect('minta/change');
	}
	public function tolak($id){
		$minta = permintaanWP::findOrFail($id);
		$minta->status_permintaan='Ditolak';
		$minta->save();
		return redirect('minta/change');
	}
}
