@extends('template')

@section('title','Pemasukan')
@section('konten')

        <form action="store" method="post">
            <h2>Input Pemasukan KasMas</h2><br>
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Pemasukan</label>
              <input type="date" class="form-control" name="tanggalpemasukan" id="exampleInputEmail1" placeholder="Tanggal Pemasukan" >
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Aktivitas Pemasukan</label>
              <input type="text" class="form-control" name="aktifitaspemasukan" id="exampleInputaktivitas1" placeholder="Aktivitas Pemasukan" >
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Jumlah Pemasukan</label>
                <input type="number" class="form-control" name="jumlahpemasukan" id="exampleInputjumlah1" placeholder="Jumlah Pemasukan" step="100" min="100">
              </div>
              <div class="form-group">
                <label for="exampleInputketerangan1">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="exampleInputketerangan1" placeholder="Keterangan" >
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
@endsection