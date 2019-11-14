@extends('template')

@section('title','Pengeluaran KasMas')
@section('konten')

    @if(Auth::check())
    @if(Auth::user()->id_user == '2')
        <a class="btn btn-success" href="pengeluaran/entry/"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entry</a><br><br>     
    @endif
    @endif
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Tanggal Pengeluaran</th>
                <th>Aktivitas pengeluaran</th>
                <th>Jumlah Pengeluaran</th>
                <th>Keterangan</th>
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
                <th>Aksi</th>
            @endif
            @endif
            </tr>
        @foreach($pengeluaran as $p)
            <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->tanggalpengeluaran}}</td>
            <td>{{$p->aktivitaspengeluaran}}</td>
            <td>Rp. {{$p->jumlahpengeluaran}}</td>
            <td>{{$p->keterangan}}</td>
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
                <td>
                    <a class="btn btn-primary" href="{{route('pengeluaran.edit', $p->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    
                    <a class="btn btn-danger" href="{{route('pengeluaran.delete', $p->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            @endif
            @endif
            </tr>
        @endforeach

        </table>

        Total = @php $jumlahsaldo = 0; @endphp @foreach($pengeluaran as $peng) @php $jumlahsaldo += $peng->jumlahpengeluaran; @endphp @endforeach {{ $jumlahsaldo }}


@endsection