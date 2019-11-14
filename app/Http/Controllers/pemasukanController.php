<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pemasukan;
use App\pengeluaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class pemasukanController extends Controller
{
    public function home(){
        return view('welcome');
	}
	public function saldo(){
		$pemasukan = pemasukan::get();
		$pengeluaran = pengeluaran::get();
		$jumlahpemasukan = $pemasukan->sum('jumlahpemasukan');
		$jumlahpengeluaran = $pengeluaran->sum('jumlahpengeluaran');
		return view('saldo', compact('pemasukan','pengeluaran', 'jumlahpemasukan', 'jumlahpengeluaran'));
	}

    // public function pemasukan(){
    //     return view('pemasukan');
    // }

    public function inputpemasukan(){
        return view('inputpemasukan');
    }

    public function pemasukan()
    {
    	// mengambil data dari table pegawai
    	$pemasukan = pemasukan::all();
 
    	// mengirim data pegawai ke view index
    	return view('pemasukan',['pemasukan' => $pemasukan]);
 
    }

    public function store(Request $request){
		
		// $this->validate($request,[
		// 	'tanggalpemasukan' => 'required',
		// 	'aktivitaspemasukan' => 'required',
		// 	'jumlahpemasukan' => 'required|numeric'
		//  ]);
		
		pemasukan :: create([
			'nama' => 'Admin',
			'tanggalpemasukan' => Carbon::now(),
			'aktivitaspemasukan' => $request->aktifitaspemasukan,
			'keterangan' => $request->keterangan,
			'jumlahpemasukan' => $request->jumlahpemasukan
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pemasukan');
    }

    public function edit($id)
    {
    	// mengambil data dari table pegawai
    	$pemasukan = DB::table('pemasukan')->where('id',$id)->get();
 
    	// mengirim data pegawai ke view index
    	return view('editpemasukan',['pemasukan' => $pemasukan]);
 
    }

    public function update(Request $request){
		// $this->validate($request,[
		// 	'tanggalpemasukan' => 'required',
		// 	'aktivitaspemasukan' => 'required',
		// 	'jumlahpemasukan' => 'required|numeric'
		//  ]);

        DB::table('pemasukan')->where('id',$request->id)->update([
			'tanggalpemasukan' => Carbon::now(),
			'aktivitaspemasukan' => $request->aktifitaspemasukan,
			'keterangan' => $request->keterangan,
			'jumlahpemasukan' => $request->jumlahpemasukan
		]);
		// alihkan halaman ke halaman pemasukan
		return redirect('/pemasukan');
    }

    public function delete($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('pemasukan')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/pemasukan');
	}

	public function infaq(){
		return view('infaq');
	}
	public function storeinfaq(Request $request){
		
		// $this->validate($request,[
		// 	'tanggalpemasukan' => 'required',
		// 	'aktivitaspemasukan' => 'required',
		// 	'jumlahpemasukan' => 'required|numeric'
		//  ]);
		$rules = [
			'nama' => 'required|alpha_num',
			'jumlah' => 'required|numeric',
			'foto' => 'required|image|mimes:jpeg,png,jpg',
		];
		
		if(Validator::make($request->all(), $rules)){
			if($request->file('upload')!=null){
				$image = $request->file('upload');
				$imageName = $image->getClientOriginalName();
				$filename = pathinfo($imageName, PATHINFO_FILENAME);
				$ext = $request->file('upload')->getClientOriginalExtension();
				$tgl = Carbon::now()->format('dmYHis');
				$newname = $filename . $tgl . "." . $ext;
				$image->move(public_path('assets/images/buktiinfaq'), $newname);
				}

		pemasukan :: create([
			'nama'=> $request->nama,
			'tanggalpemasukan' => Carbon::now(),
			'aktivitaspemasukan' => 'Sumbangan dari warga',
			'keterangan' => 'Sumbangan dari '.$request->nama,
			'jumlahpemasukan' => $request->jumlah,
			'foto' => $newname,
		]);
		// alihkan halaman ke halaman pegawai
			return redirect('/pemasukan');
		}
		else{
			return redirect('/pemasukan');
		}
    }

}
