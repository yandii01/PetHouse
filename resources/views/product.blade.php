@extends('layouts/mainadmin')

@section('title', 'Admin Dashboard')

@section('content')
@endsection

@section('content2')
<div class="container"><br>
    <div class="col-lg-8 mx-auto my-5">	
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/product/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>

                    <div class="form-group">
						<b>Nama Produk</b>
						<textarea class="form-control" name="nama_produk"></textarea>
					</div>

					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>

                    <div class="form-group">
						<b>Harga</b>
						<input type="text" class="form-control" name="harga">
					</div>

					<input type="submit" value="submit" class="btn btn-primary"><br><br>
				</form>

        <h4 class="my-5">Data</h4>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">File</th>
                            <th>Nama Produk</th>
							<th>Keterangan</th>
                            <th width="1%">Harga</th>
							<th width="1%">OPSI</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($produk as $produk)
						<tr>
							<td><img width="150px" src=" {{ url('/produk/'.$produk->file) }} "></td>
							<td>{{$produk->nama_produk}}</td>
							<td>{{$produk->keterangan}}</td>
                            <td>{{$produk->harga}}</td>
                            <!-- <td>{{$produk->id}}</td> -->
							<td><a href="product/{{ $produk->id }}/editproduct" class="btn btn-primary btn-sm">Edit</a>
                            
                            <form action="product/{{ $produk->id }}" method="post" class="d-inline" >
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
						</tr>
						@endforeach
					</tbody>
				</table>
        </div>	
        	
</div>
            <!-- Page Content Holder
            

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
			
			
			</div>

                </div>
        </div> -->
@endsection
