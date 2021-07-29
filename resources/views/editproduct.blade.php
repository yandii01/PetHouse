

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Edit Produk| Admin Dashboard</title>

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

				<form action="/product/{{ $produk->id }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
					{{ csrf_field() }}

					<div class="form-group">
						<b>File Gambar</b><br/>
                        <img src="{{ URL::to('/') }}/produk/{{ $produk->file }}" class="img-thumbnail" width="200" />
                        <input type="hidden" name="hidden_file" value="{{ $produk->image }}" />
					</div>

                    <div class="form-group">
						<b>Nama Produk</b>
						<input type="text" class="form-control" name="nama_produk" value="{{ $produk->nama_produk }}">
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<input type="text" class="form-control" name="keterangan" value="{{ $produk->keterangan }}">
					</div>
                    
                    <div class="form-group">
						<b>Harga</b>
						<input type="text" class="form-control" name="harga" value="{{ $produk->harga }}">
					</div>

					
                    <input type="submit" value="submit" class="btn btn-primary">
                    <a href="{{ url('/product')}}"  data-hover="Kembali" class="btn btn-danger">Kembali</a>
                </form>

				<!-- <h4 class="my-5">Data</h4> -->

				<h4 class="my-5">Data</h4>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
                            <th>Nama Produk</th>
							<th>Keterangan</th>
                            <th width="1%">Harga</th>
							
							
						</tr>
					</thead>
					<tbody>
					<tr>
							<td>{{$produk->nama_produk}}</td>
							<td><img width="150px" src=" {{ url('/produk/'.$produk->file) }} "></td>
							<td>{{$produk->keterangan}}</td>
                            <td>{{$produk->harga}}</td>
                        </tr>
					
					</tbody>
				</table>
			</div>
			</div>

                





