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
                <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">Id</th>
                            <th width="1%">Nama</th>
							<th width="1%">Email</th>
                            <th width="1%">OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach( $user as $u )
						<tr>
							<td>{{$u->id}}</td>
							<td>{{$u->name}}</td>
                            <td>{{$u->email}}</td>
							<td><form action="manageuser/{{ $u->id }}" method="post" class="d-inline" >
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form></td>
						</tr>
						@endforeach
					</tbody>
				</table>

       </div>
 </div>


@endsection