@extends('template')

@section('title','Pemasukan KasMas')
@section('konten')

    @if(Auth::check()==false)
    <a class="btn btn-success" href="pemasukan/infaq"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Infaq</a><br><br>
    @elseif(Auth::check()&&Auth::user()->id_user == '2')
        <a class="btn btn-success" href="pemasukan/entry"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entry</a><br><br>        
        @endif
    <table class="table table-striped">
            <tr>
                <th>
                    No
                </th>
                <th>Tanggal Pemasukan</th>
                <th>Nama</th>
                <th>Aktivitas Pemasukan</th>
                <th>Jumlah Pemasukan</th>
                <th>Keterangan</th>
                @if(Auth::check())
            @if(Auth::user()->id_user == '2')
            <th>Foto</th>
            @endif
            @endif
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
            <th>Aksi</th>
            @endif
            @endif
            </tr>
    @foreach($pemasukan as $p)
		<tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->tanggalpemasukan }}</td>
            <td>{{ $p->nama }}</td>
			<td>{{ $p->aktivitaspemasukan }}</td>
			<td>Rp. {{ $p->jumlahpemasukan }}</td>
            <td>{{ $p->keterangan }}</td>
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
                <td>
                @if($p->foto!=null)
                <a href="{{asset('assets/images/buktiinfaq/'.$p->foto)}}" target="blank" class="btn btn-info" title="Lihat Foto"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                @endif
			    </td>
            @endif
            @endif
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
                <td>
				    <a class="btn btn-primary" href="{{route('pemasukan.edit', $p->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
				 
				    <a class="btn btn-danger" href="{{route('pemasukan.delete', $p->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            @endif
            @endif
		</tr>
        @endforeach
          </table>

          Total = @php $jumlahsaldo = 0; @endphp @foreach($pemasukan as $pem) @php $jumlahsaldo += $pem->jumlahpemasukan; @endphp @endforeach {{ $jumlahsaldo }}
          <br><br>
          <a class="btn btn-info" href="{{route('saldo')}}"><span aria-hidden="true"></span>Saldo KasMas</a>

@endsection