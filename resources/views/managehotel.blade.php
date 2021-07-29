@extends('layouts/mainadmin')

@section('title', 'Admin Dashboard')

@section('content')
@endsection

@section('content2')
<div class="container"><br>
    <div class="col-lg-12 mx-auto my-5">	
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/managehotel/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

                    <div class="form-group">
						<b>Nama Hotel</b>
						<input class="form-control" name="hotel">
					</div>

                    <div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

					<div class="form-group">
						<b>Alamat</b>
						<textarea class="form-control" name="alamat"></textarea>
					</div>
                    
                    <div class="form-group">
						<b>Nomer Telp</b>
						<input class="form-control" name="notelp">  
					</div>

                    <div class="form-group">
						<b>Harga</b>
						<input type="text" class="form-control" name="harga">
						<b>-</b>
						<input type="text" class="form-control" name="harga2">
					</div>

					<input type="submit" value="submit" class="btn btn-primary">
				</form>
			</div>
				
				<div class="col-lg-12 mx-auto my-5"><br>
				<h4 class="my-5">Data</h4><br>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
                            <th>Nama Hotel</th>
                            <th width="20%">Keterangan</th>
							<th>Alamat</th>
							<th>No.telp</th>
                            <th width="1%">Harga</th>
                            <th width="1%">Harga2</th>
							<th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($hotel as $h)
						<tr>
							<td><img width="150px" src="{{ url('/hotel/'.$h->file) }}"></td>
                            <td>{{$h->hotel}}</td>
							<td>{{$h->keterangan}}</td>
                            <td>{{$h->alamat}}</td>
                            <td>{{$h->notelp}}</td>
                            <td>{{$h->harga}}</td>
                            <td>{{$h->harga2}}</td>
							<td>
                            <a href="managehotel/{{ $h->id }}/edithotel" class="btn btn-primary">edit</a>
                            <form action="/managehotel/{{ $h->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
			</div>

                </div>
        </div>
@endsection