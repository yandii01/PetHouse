@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')

<div class="container"><br><br>

				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif

				<form action="/beli/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}

					
						<div class="form-group "><br>
							<b>File Gambar</b><br/>
							<input type="text" name="nama_produk" readonly class="form-control-plaintext" value="{{$produk->nama_produk}}">
						</div>
					
						
					<div class="form-group">
							<div class="form-group col-md-6">
								<label for="inputNama4">Nama</label>
								<input type="text" class="form-control" id="inputNama4" name="name" value="{{ auth()->user()->name }}" readonly>
							</div>
							</div>

					<div class="form-group">
							<div class="form-group col-md-6">
								<label for="inputuserid">userId</label>
								<input type="text" class="form-control" id="inputEmail4" name="userId" value="{{ auth()->user()->id }}" readonly>
							</div>
					</div>

					<!-- <div class="form-group col-md-12"> -->
					<!-- <label for="notelp4">No.Telp</label> -->
						<!-- <div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1" >+62</span>
							</div>
							<input type="text" class="form-control" name="nohp" id="notelp" placeholder="No.Telp" aria-label="No.Telp" aria-describedby="basic-addon1">
						</div>
					</div> -->
					<div class="form-group">
							<b>No.HP</b>
							<div class="input-group">
								<div class="form-group col-md-3">
									<input type="text"  class="form-control" value="+62" readonly>
								</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" name="nohp" >

								</div>	
						</div>
						</div>

					<div class="form-group">
						<div class="form-group col-md-12">
							<b>Alamat</b>
							<textarea class="form-control" name="alamat"></textarea>
						</div>
					</div>


					<div class="form-group">
					<br><b>Jumlah</b>
					<select id="qty" name="quantity" onchange="price()">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
					
					</select><br>
					</div>
					
					<div class="form-group">
						<b>Harga</b>
						<!-- <div class="input-group-prepend">
							<span class="input-group-text">Rp.</span>
							
						</div> -->
						<input type="text" name="harga"  id="harga" value="{{$produk->harga}}" readonly>
						</input>
					</div>

					<input type="submit" value="submit" class="btn btn-primary">
				</form>
				
				<script>
				var harga = document.getElementById("harga").value;
				function price(){
					var qty = document.getElementById("qty").value;
					document.getElementById("harga").value= qty*harga;
				}
				</script>
		</div><br>
	@endsection
