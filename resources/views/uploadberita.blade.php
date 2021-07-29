@extends('layouts/mainadmin')

@section('title', 'Admin Dashboard')

@section('content')
@endsection

@section('content2')
<div class="container"><br><br>
<div class="col-lg-8 mx-auto my-5">	
    	@if(count($errors) > 0)

	    	<div class="alert alert-danger">
				@foreach ($errors->all() as $error)
				{{ $error }} <br/>
				@endforeach
			</div>

		@endif
    <form action="/uploadberita/proses" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <b>File Gambar</b><br/>
                    <input type="file" name="file" class="btn btn-secondary" value="{{ old('file') }}">
                </div>

                <div class="form-group">
                    <b>Judul</b>
                    <input type="text" class="form-control" name="judul" value="{{ old('judul') }}">
                </div>

                <div class="form-group">
                    <b>Keterangan</b>
                    <textarea class="form-control" name="keterangan" value="{{ old('keterangan') }}"></textarea>
                </div>

                <input type="submit" value="submit" class="btn btn-primary">
    </form><br><br>

    <h4 class="my-5">Data</h4><br>
    <table class="table table-bordered table-striped">
		    <thead>
                <tr>
                    <th width="20%">Judul</th>
                    <th width="5%">File</th>
                    <th width="80%">Berita</th>
                    <th width="5%">OPSI</th>
                </tr>
			</thead>
				<tbody>
                    @foreach($berita as $berita)
					<tr>
                        <td>{{$berita->judul}}</td>
						<td><img width="150px" src="{{ url('/berita/'.$berita->file) }}"></td>
						<td>{{$berita->keterangan}}</td>
						<td>
                        
                       <a href="uploadberita/{{ $berita->id }}/editberita" class="btn btn-primary">edit</a>
                        <form action="/uploadberita/{{ $berita->id }}" method="post" class="d-inline" >
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form></td>
					</tr>
					@endforeach
				</tbody>
		</table>
        </div>
</div><br> <br>
@endsection 


