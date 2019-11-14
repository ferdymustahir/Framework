@extends('template')

@section('title','Inventaris')
@section('konten')
    @if(Auth::check())
    @if(Auth::user()->id_user == '2')
        <a class="btn btn-success" href="inventaris/create"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entry</a><br><br>
    @endif
    @endif
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga Barang</th>
                <th>Total</th>
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
                <th>Aksi</th>
            @endif
            @endif
            </tr>
        @foreach($inventaris as $inven)
            <tr>
            <td>{{$inven->id_inventaris}}</td>
            <td>{{$inven->barang}}</td>
            <td>{{$inven->jumlah}}</td>
            <td>Rp. {{$inven->harga}}</td>
            <td>Rp. {{$inven->jumlah * $inven->harga}}</td>
            @if(Auth::check())
            @if(Auth::user()->id_user == '2')
            <td>
                <a class="btn btn-primary" href="inventaris/edit/{{ $inven->id_inventaris }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>       
                <a class="btn btn-danger" href="inventaris/delete/{{ $inven->id_inventaris }}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
            </td>
            @endif
            @endif
            </tr>
        @endforeach

        </table>
        Total = @php $jumlahsaldo = 0; @endphp @foreach($inventaris as $inven) @php $jumlahsaldo += $inven->jumlah * $inven->harga; @endphp @endforeach {{ $jumlahsaldo }}



@endsection