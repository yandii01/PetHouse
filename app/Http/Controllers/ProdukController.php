<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;

class ProdukController extends Controller
{
	public function upload(){
		$produk = Produk::get();
		return view('product',['produk' => $produk]);
	}

	public function show(Produk $produk){
		return view('products.show', compact('produk'));
	}

	public function test(Produk $produk){
		return view('products.beli', compact('produk'));
	}
	public function destroy(Produk $produk){
		Produk::destroy($produk->id); 
		return redirect('/product');
	}

	public function tampil(){
		$produk = Produk::get();
		return view('products',['produk' => $produk]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'nama_produk' => 'required',
			'keterangan' => 'required',
			'harga' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'produk';
		$file->move($tujuan_upload,$nama_file);

		$Produk = produk::create([
			'file' => $nama_file,
			'nama_produk' => $request->nama_produk,
			'keterangan' => $request->keterangan,
			'harga' => $request->harga,
		]);

		return redirect()->back();
	}
      
	public function edit(Produk $produk)
    {
        return view('editproduct',compact('produk'));
	}

	public function update(Request $request, Produk $produk){


		$this->validate($request, [
			'nama_produk' => 'required',
			'keterangan' => 'required',
			'harga' => 'required',
		]);

        $form_data = array(
            // 'file'            =>   $file_name,
            'nama_produk' => $request->nama_produk,
			'keterangan' => $request->keterangan,
			'harga' => $request->harga,
        );

		// $file = $request->file('file');

		// $nama_file = time()."_".$file->getClientOriginalName();

      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'berita';
		// $file->move($tujuan_upload,$nama_file);
		Produk::whereId($produk->id)->update($form_data);

		return redirect('/product') ->with('status', 'Product berhasil diedit');
	}
}