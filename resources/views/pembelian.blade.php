
            <div class="container">
            <br><br>
                <table class="table table-bordered table-striped">
					<thead>
						<tr>
                            <th width="1%">Nama Produk</th>
                            <th width="1%">Nama</th>
							<th width="1%">Email</th>
                            <th width="1%">No HP</th>
                            <th width="1%">Alamat</th>
                            <th width="1%">Quantity</th>
                            <th width="1%">Harga</th>
						</tr>
					</thead>
					<tbody>
						@foreach( $transaksi as $t )
						<tr>
							<td>{{$t->nama_produk}}</td>
                            <td>{{$t->name}}</td>
                            <td>{{$t->email}}}</td>
                            <td>{{$t->nohp}}</td>
                            <td>{{$t->alamat}}</td>
                            <td>{{$t->quantity}}</td>
                            <td>{{$t->harga}}</td>
						</tr>
                        @endforeach
					</tbody>
				</table>
                </div>