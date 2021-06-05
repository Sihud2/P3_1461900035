<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesPelanggan extends Controller
{

    public function transaksi()
    {
        // echo "ini Halaman transaksi";
        $transaksi = DB::table('transaksi')
        ->join('pelanggan', "transaksi.id_pelanggan", "=" ,"pelanggan.id")
        ->join('barang', "transaksi.id_barang", "=", "barang.id")
        ->select('pelanggan.nama', 'barang.nama', 'barang.harga') // nama pelanggan tidak  muncul karena filed di nama
        // dinamakan "nama" di kolom pelanggan
        ->get();

        return view('toko.transaksi')->with('transaksi', $transaksi);
    }


    //metod untuk mencari pelanggan
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $pelanggan = DB::table('pelanggan')->where('nama', "like", "%".$cari."%")->paginate(1);
        // return view('toko.pelanggan', compact('pelanggan', $pelanggan));
        return view('toko.detail', ['pelanggan'=>$pelanggan]);
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggan = DB::table('pelanggan')->get();
        // return view('toko.pelanggan', ['pelanggan'=>$pelanggan]);
        return view('toko.pelanggan', compact('pelanggan', $pelanggan));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('toko.tambahpelanggan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pelanggan')->insert([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat
        ]);

        return redirect('pelanggan');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pelanggan')->where('id', $id)->delete();
        return redirect('pelanggan');

    }
}
