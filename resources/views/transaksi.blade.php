@extends('layouts/mainadmin')

@section('title', 'Admin Dashboard')

@section('content')
@endsection

@section('content2')

            <div class="container">
            <br><br>
                <table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="1%">Id</th>
                            <th width="1%">Nama Produk</th>
                            <th width="1%">Nama</th>
                            <th width="1%">No HP</th>
                            <th width="1%">Alamat</th>
                            <th width="1%">Quantity</th>
                            <th width="1%">Harga</th>
                            <th width="1%">Status</th>
                            <!-- <th width="1%">OPSI</th> -->
						</tr>
					</thead>
					<tbody>
						@foreach( $transaksi as $t )
						<tr>
							<td>{{$t->id}}</td>
							<td>{{$t->nama_produk}}</td>
                            <td>{{$t->users->name}}</td>
                            <td>{{$t->nohp}}</td>
                            <td>{{$t->alamat}}</td>
                            <td>{{$t->quantity}}</td>
                            <td>{{$t->harga}}</td>
                            <td>{{$t->getStatus()}}</td>
                            
							<td>
                            @if($t->status==0)
                            <form action="/transaksi/{{ $t->id }}" method="post" class="d-inline">
                                @method('patch')
                                @csrf
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </form>
                            @else
                            @endif
                            </td>
						</tr>
                        @endforeach
					</tbody>
				</table>
                </div>
@endsection