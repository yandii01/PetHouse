

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Edit Berita| Admin Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/css/style1.css">
    </head>
    <body>

        <br><br>
        <div class="container">
			<div class="col-lg-8 mx-auto my-5">	

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/uploadberita/{{ $berita->id }}" method="POST" enctype="multipart/form-data">
					@method('patch')
					{{ csrf_field() }}

					<div class="form-group">
						<b>File Gambar</b><br/>
						<img src="{{ URL::to('/') }}/berita/{{ $berita->file }}" class="img-thumbnail" width="200" />
						<input type="hidden" name="hidden_file" value="{{ $berita->image }}" />
					</div>

					<div class="form-group">
						<b>Judul</b>
						<input type="text" class="form-control" name="judul" value="{{ $berita->judul }}">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<input type="text" class="form-control" name="keterangan" value="{{ $berita->keterangan }}">
					</div>

					<input type="submit" value="submit" class="btn btn-primary">
					<a href="{{ url('/uploadberita')}}"  data-hover="Product" class="btn btn-danger">Kembali</a>
				</form>

				
				<h4 class="my-5">Data</h4>

				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="4%">Judul</th>
							<th width="1%">File</th>
                            <th width="1%">Berita</th>
							</tr>
					</thead>
					<tbody>
						<tr>
                            <td>{{$berita->judul}}</td>
							<td><img width="150px" src="{{ url('/berita/'.$berita->file) }}"></td>
							<td>{{$berita->keterangan}}</td>
							<!-- <td>
                            <form action="/uploadberita/{{ $berita->id }}" method="post" class="d-inline">
                            </form>
                            </td> -->
						</tr>
					</tbody>
				</table>
			</div>
			</div>

                





