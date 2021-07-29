<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Berita;

class BeritaController extends Controller
{
	public function upload(){
		$berita = Berita::get();
		return view('uploadberita',['berita' => $berita]);
	}

	public function edit(Berita $berita)
    {
        return view('editberita',compact('berita'));
	}
	
	public function update(Request $request, Berita $berita){


		// $file_name = $request->hidden_file;
        // $file = $request->file('file');
        // if($file != '')
        // {
            $this->validate($request, [
                'judul' => 'required',
				'keterangan' => 'required',
            ]);

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
            'judul'       =>   $request->judul,
            'keterangan'        =>   $request->keterangan
        );

		// $file = $request->file('file');

		// $nama_file = time()."_".$file->getClientOriginalName();

      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'berita';
		// $file->move($tujuan_upload,$nama_file);
		Berita::whereId($berita->id)->update($form_data);

		return redirect('/uploadberita') ->with('status', 'Berita berhasil diedit');
	}
		
	public function destroy(Berita $berita){
		Berita::destroy($berita->id); 
		return redirect('/uploadberita');
	}
    
    public function tampil(){
		$berita = Berita::get();
		return view('beritas',['berita' => $berita]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'judul' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'berita';
		$file->move($tujuan_upload,$nama_file);

		$Berita = berita::create([
			'file' => $nama_file,
			'judul' => $request->judul,
			'keterangan' => $request->keterangan,
		]);

		return redirect()->back();
	}
	public function show(Berita $berita){
		return view('berita.show', compact('berita'));
	}
	public function beritaview(Berita $berita)
    {
		Berita::get($berita->id); 
        return view('beritas.details',['berita' => $berita]);
	}
}