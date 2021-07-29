@extends('layouts/main')

@section('title', "About ANY's Pet House")

@section('mainpage2')

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

				<form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                    @method('patch')
					{{ csrf_field() }}

                    <div class="form-group">
						<b>Nama</b>
						<input type="text" class="form-control" name="name" value="{{ $user->name }}">
					</div>

					<div class="form-group">
						<b>Email</b>
						<input type="text" class="form-control" name="email" value="{{ $user->email }}">
					</div>

					<input type="submit" value="submit" class="btn btn-primary">
				</form>
				<br>
				<h4 class="my-5">Data</h4>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">Name</th>
                            <th>Email</th>
						</tr>
					</thead>
					<tbody>
					<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
                        </tr>
					
					</tbody>
				</table>
			</div>
			</div>
	@endsection