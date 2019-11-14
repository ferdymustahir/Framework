@extends('template')

@section('title','Inventaris')
@section('konten')

        <form action='inventaris/store' method="post">
            <h2>Input Inventaris KasMas</h2><br>
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="exampleInputEmail1">Barang</label>
              <input type="text" class="form-control" name="barang" id="exampleInputEmail1" placeholder="Masukkan Barang Inventaris" >
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="exampleInputaktivitas1" placeholder="Masukkan Jumlah Barang" >
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Harga Barang</label>
                <input type="number" class="form-control" name="harga" id="exampleInputjumlah1" placeholder="Masukkan Harga Barang" step="100" min="100">
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
@endsection