@extends('template')

@section('title','Pengeluaran')
@section('konten')

        @foreach($pengeluaran as $p)
        <form action="{{route('pengeluaran.update')}}" method="post">
            <h2>Edit Pengeluaran KasMas</h2><br>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}">
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Pengeluaran</label>
              <input type="date" class="form-control" name="tanggalpengeluaran" id="exampleInputEmail1" placeholder="Tanggal Pemasukan" required="required" value="{{ $p->tanggalpengeluaran }}">
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Aktivitas Pengeluaran</label>
              <input type="text" class="form-control" name="aktivitaspengeluaran" id="exampleInputaktivitas1" placeholder="Aktivitas Pemasukan" required="required" value="{{ $p->aktivitaspengeluaran }}">
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Jumlah Pengeluaran</label>
                <input type="number" class="form-control" name="jumlahpengeluaran" id="exampleInputjumlah1" placeholder="Jumlah Pemasukan" required="required" step="100" min="100" value="{{ $p->jumlahpengeluaran }}">
              </div>
              <div class="form-group">
                <label for="exampleInputketerangan1">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="exampleInputketerangan1" placeholder="Keterangan" required="required" value="{{ $p->keterangan }}">
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        @endforeach

@endsection