<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\inventaris;

class inventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventaris = inventaris::all();
 
    	// mengirim data pegawai ke view index
    	return view('inventaris',['inventaris' => $inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputinventaris');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
			'barang' => 'required',
			'jumlah' => 'required|numeric',
			'harga' => 'required|numeric'
		 ]);
		
		inventaris :: create([
			'barang' => $request->barang,
			'jumlah' => $request->jumlah,
			'harga' => $request->harga
        ]);
        // $total=$jumlah*$harga
		// alihkan halaman ke halaman pegawai
		return redirect('/inventaris');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_inventaris)
    {
        $inventaris = DB::table('inventaris')->where('id_inventaris',$id_inventaris)->get();
        // dd($inventaris);
    	// mengirim data pegawai ke view index
        return view('editinventaris',['inventaris' => $inventaris]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_inventaris)
    {
        inventaris::where('id_inventaris',$id_inventaris)
        ->update([
            'barang'=> $request->barang,
            'jumlah'=> $request->jumlah,
            'harga'=> $request->harga
        ]);
    return redirect('/inventaris');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_inventaris)
    {
        DB::table('inventaris')->where('id_inventaris',$id_inventaris)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/inventaris');
    }
}
