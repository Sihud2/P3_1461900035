<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function login()
    {
        return view('toko.login');
    } 

    public function home(Request $request)
    {
        DB::table('user')->insert([
            'nama'=>'admin',
            'username'=>$request->username,
            'password'=>$request->password
        ]);

        return view('toko.home');
    }

    // menampilkan halaman barang
    public function barang()
    {
        $barang = DB::table('barang')->get();
        return view('toko.barang', ['barang'=>$barang]);
    }

    public function tambahbarang()
    {
        return view('toko.tambahbarang');
    }

    public function hapus($id)
    {
        DB::table('barang')->where('id', $id)->delete();
        return redirect('barang');
    }

    public function ubah()
    {
        return view('toko.ubahbarang');
    }

    public function ubahbarang($id)
    {
       $barang = DB::table('barang')->where('id', $id)->get();
        return view('toko.ubahbarang', ['barang'=>$barang]);
    }

    public function updatebarang(Request $request)
    {
        DB::table('barang')->where('id', $request->id)->update([
            'nama'=>$request->nama,
            'harga'=>$request->harga
        ]);

        return redirect('barang');
    }

    public function tambahdatabarang(Request $request)
    {
        DB::table('barang')->insert([
            'nama'=>$request->nama,
            'harga'=>$request->harga
        ]);

        return redirect('barang');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
