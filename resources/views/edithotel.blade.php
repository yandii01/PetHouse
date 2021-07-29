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

				<form action="/managehotel/{{ $hotel->id }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
					{{ csrf_field() }}

					<div class="form-group">
						<b>File Gambar</b><br/>
                        <img src="{{ URL::to('/') }}/hotel/{{ $hotel->file }}" class="img-thumbnail" width="200" />
                        <input type="hidden" name="hidden_file" value="{{ $hotel->image }}" />
					</div>

                    <div class="form-group">
						<b>Nama Hotel</b>
						<input type="text" class="form-control" name="hotel" value="{{ $hotel->hotel }}">
					</div>

                    <div class="form-group">
						<b>Keterangan</b>
						<textarea type="text" class="form-control" name="keterangan" value="{{ $hotel->keterangan }}"></textarea>
					</div>

					<div class="form-group">
						<b>Alamat</b>
						<textarea type="text" class="form-control" name="alamat" value="{{ $hotel->alamat }}"></textarea>
					</div>
                    
                    <div class="form-group">
						<b>No Telp</b>
						<input type="text" class="form-control" name="notelp" value="{{ $hotel->notelp }}">
					</div>

                    <div class="form-group">
						<b>Harga</b>
						<input type="text" class="form-control" name="harga" value="{{ $hotel->harga }}">
						-
						<input type="text" class="form-control" name="harga2" value="{{ $hotel->harga2 }}">
					</div>

					<input type="submit" value="submit" class="btn btn-primary">
                    <a href="{{ url('/managehotel')}}"  data-hover="Product" class="btn btn-danger">Kembali</a>
				</form>
				
				
			</div>

        </div>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
