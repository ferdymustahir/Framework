@extends('template')

@section('title','Input Pemasukan')
@section('konten')
<form action="{{route('pengeluaran.store')}}" method="post">
            <h2>Input Pengeluaran KasMas</h2><br>
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Pengeluaran</label>
              <input type="date" class="form-control" name="tanggalpengeluaran" id="exampleInputEmail1" placeholder="Tanggal Pengeluaran" required>
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Aktivitas Pengeluaran</label>
              <input type="text" class="form-control" name="aktivitaspengeluaran" id="exampleInputaktivitas1" placeholder="Aktivitas Pengeluaran" required>
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Jumlah Pengeluaran</label>
                <input type="number" class="form-control" name="jumlahpengeluaran" id="exampleInputjumlah1" placeholder="Jumlah Pengeluaran" required step="100" min="100">
              </div>
              <div class="form-group">
                <label for="exampleInputketerangan1">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="exampleInputketerangan1" placeholder="Keterangan" required>
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>


@endsection