<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaksi;
use App\Produk;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::get();
        return view('transaksi',compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $transaksi = Transaksi::get();
		return view('products.beli',compact('transaksi'));
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
        $this->validate($request, [
            'nama_produk' => 'required',
            'userId' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'quantity' => 'required',
			'harga' => 'required',
        ]);
        
        $Transaksi = transaksi::create([
            'nama_produk' => $request->nama_produk,
            'userId' => $request->userId,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat,
			'quantity' => $request->quantity,
			'harga' => $request->harga,
        ]);
        
        return redirect('/products')->with('status', 'Berhasil membeli produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

    public function test(Transaksi $transaksi){
        
		return view('products.beli', compact('transaksi'));
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
        $t = Transaksi::where('id', $id)->first();

        Transaksi::where('id', $id)->update([
            'status' => 1
        ]);
        return back()->with('status', 'Dah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tampil(Transaksi $transaksi)
    {
        Produk::whereId($produk->id)->update($form_data);
		return redirect('transaksi') ->with('status', 'transaksi berhasil di delete!');
    }
    
}
