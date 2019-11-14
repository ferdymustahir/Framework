@extends('template')

@section('title','Inventaris')
@section('konten')

@foreach($inventaris as $inven)
<form action="inventaris/update/{{$inven->id_inventaris}}" method="post">
            {{ method_field('PUT') }}
            <h2>Edit Inventaris KasMas</h2><br>
            {{ csrf_field() }}
            
            <div class="form-group">
              <label for="exampleInputEmail1">Barang</label>
            <input type="text" class="form-control" name="barang" id="exampleInputEmail1" placeholder="Masukkan Barang Inventaris" value="{{$inven->barang}}">
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Jumlah</label>
              <input type="number" class="form-control" name="jumlah" id="exampleInputaktivitas1" placeholder="Masukkan Jumlah Barang" value="{{$inven->jumlah}}">
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Harga Barang</label>
                <input type="number" class="form-control" name="harga" id="exampleInputjumlah1" placeholder="Masukkan Harga Barang" step="100" min="100" value="{{$inven->harga}}" >
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        @endforeach
@endsection