<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\pengeluaran;

class pengeluaranController extends Controller
{

    public function pengeluaran(){
        $pengeluaran = pengeluaran::all();

        return view('pengeluaran',['pengeluaran'=>$pengeluaran]);
    }

    public function inputpengeluaran(){
        return view('inputpengeluaran');
    }
    public function store(Request $request){
        $this->validate($request,[
			'tanggalpengeluaran' => 'required',
			'aktivitaspengeluaran' => 'required',
			'jumlahpengeluaran' => 'required|numeric'
		 ]);
        pengeluaran :: create([
			'tanggalpengeluaran' => $request->tanggalpengeluaran,
			'aktivitaspengeluaran' => $request->aktivitaspengeluaran,
			'keterangan' => $request->keterangan,
			'jumlahpengeluaran' => $request->jumlahpengeluaran
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pengeluaran');
    }

    public function edit($id){
        // $pengeluaran = pengeluaran::find($id);
        $pengeluaran = DB::table('pengeluaran')->where('id',$id)->get();
        
        return view('editpengeluaran',['pengeluaran'=>$pengeluaran]);
    }

    public function update(Request $request){

        $this->validate($request,[
			'tanggalpengeluaran' => 'required',
			'aktivitaspengeluaran' => 'required',
			'jumlahpengeluaran' => 'required|numeric'
		 ]);
        DB::table('pengeluaran')->where('id',$request->id)->update([
            'tanggalpengeluaran' => $request->tanggalpengeluaran,
            'aktivitaspengeluaran' => $request->aktivitaspengeluaran,
            'keterangan' => $request->keterangan,
            'jumlahpengeluaran'=> $request->jumlahpengeluaran
        ]);

        return redirect('/pengeluaran');
    }
    public function delete($id){
        DB::table('pengeluaran')->where('id',$id)->delete();

        return redirect('/pengeluaran');
    }
    
}
