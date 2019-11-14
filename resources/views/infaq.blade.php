@extends('template')

@section('title','Infaq')
@section('konten')

        <form action="infaq/store" method="post" enctype="multipart/form-data">
            <h2>Silahkan Transfer Ke Rekening</h2><br>
            3342263746746 (BCA) <br>
            3342262344346 (BNI) <br>
            334226374674688787 (BRI) <br>
            3342212090746 (MANDIRI) <br><br>
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="exampleInputaktivitas1">Nama</label>
              <input type="text" class="form-control" name="nama" id="exampleInputaktivitas1" placeholder="Masukkan Nama Anda">
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="exampleInputaktivitas1" placeholder="Masukkan Nominal" step="100" min="100">
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Upload Struk</label>
                <input type="file" class="form-control" name="upload" id="exampleInputjumlah1" required>
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
@endsection