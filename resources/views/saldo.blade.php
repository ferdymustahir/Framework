@extends('template')

@section('title','Inventaris')
@section('konten')
    @if(Auth::check())
    @if(Auth::user()->id_user == '2')
        <a class="btn btn-success" href="/inventaris/create"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Entry</a><br><br>
    @endif
    @endif
        <div class="row">
        <div class="col-md-6">
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Pemasukan</th>
            </tr>
            @foreach ($pemasukan as $pemasukan)
                        <tr>
                        <th>{{$loop->iteration}}</th>
                        <th>{{ $pemasukan->jumlahpemasukan }}</th>
                        </tr>
                        @endforeach
            
        </table>
        
        </div>
        <div class="col-md-6">
        <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Pengeluaran</th>
                </tr>
                        @foreach ($pengeluaran as $pengeluaran)
                        <tr>
                        <th>{{$loop->iteration}}</th>
                        <th>{{ $pengeluaran->jumlahpengeluaran }}</th>
                        </tr>
                        @endforeach
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            Total Pemasukan: {{ $jumlahpemasukan }}
        </div>
        <div class="col-md-6">
            Total Pengeluaran: {{ $jumlahpengeluaran }}
        </div>
    </div><br><br>
        Total Saldo  : {{ $jumlahpemasukan - $jumlahpengeluaran }}
       




@endsection