<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function tampil(){
		$hotel = Hotel::get();
		return view('hotels',['hotel' => $hotel]);
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hotel = Hotel::get();
		return view('managehotel',['hotel' => $hotel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'hotel' => 'required',
            'keterangan' => 'required',
			'alamat' => 'required',
			'notelp' => 'required',
            'harga' => 'required',
            'harga2' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'hotel';
		$file->move($tujuan_upload,$nama_file);

		$Hotel = hotel::create([
			'file' => $nama_file,
            'hotel' => $request->hotel,
            'keterangan' => $request->keterangan,
			'alamat' => $request->alamat,
			'notelp' => $request->notelp,
			'harga' => $request->harga,
			'harga2' => $request->harga2,
		]);

		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotel.show', compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('edithotel',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel )
    {
        $this->validate($request, [
            'hotel' => 'required',
            'keterangan' => 'required',
			'alamat' => 'required',
			'notelp' => 'required',
			'harga' => 'required',
			'harga2' => 'required',
		]);


		// $file_name = $request->hidden_file;
        // $file = $request->file('file');
        // if($file != '')
        // {
        //     $request->validate([
        //         'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		// 		'judul' => 'required',
		// 		'keterangan' => 'required',
        //     ]);

        //     $file_name = time() . '_' . $file->getClientOriginalExtension();
        //     $file->move(public_path('berita'), $file_name);
        // }
        // else
        // {
        //     $request->validate([
        //         'judul' => 'required',
		// 	'keterangan' => 'required',
        //     ]);
        // }

        $form_data = array(
            // 'file'            =>   $file_name,
            'hotel' => $request->hotel,
            'keterangan' => $request->keterangan,
			'alamat' => $request->alamat,
			'notelp' => $request->notelp,
			'harga' => $request->harga,
			'harga2' => $request->harga2,
        );

		// $file = $request->file('file');

		// $nama_file = time()."_".$file->getClientOriginalName();

      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'berita';
		// $file->move($tujuan_upload,$nama_file);
		Hotel::whereId($hotel->id)->update($form_data);

		return redirect('/managehotel') ->with('status', 'Hotel berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        Hotel::destroy($hotel->id);
		return redirect('managehotel') ->with('status', 'Hotel berhasil di delete!');
    }
}
