@extends('template')

@section('title','Pemasukan')
@section('konten')

        @foreach($pemasukan as $p)
        <form action="{{ route('pemasukan.update') }}" method="post">
            <h2>Edit Pemasukan KasMas</h2><br>
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->id }}">
            <div class="form-group">
              <label for="exampleInputEmail1">Tanggal Pemasukan</label>
              <input type="date" class="form-control" name="tanggalpemasukan" id="exampleInputEmail1" placeholder="Tanggal Pemasukan" required="required" value="{{ $p->tanggalpemasukan }}">
            </div>
            <div class="form-group">
              <label for="exampleInputaktivitas1">Aktivitas Pemasukan</label>
              <input type="text" class="form-control" name="aktifitaspemasukan" id="exampleInputaktivitas1" placeholder="Aktivitas Pemasukan" required="required" value="{{ $p->aktivitaspemasukan }}">
            </div>
            <div class="form-group">
                <label for="exampleInputjumlah1">Jumlah Pemasukan</label>
                <input type="number" class="form-control" name="jumlahpemasukan" id="exampleInputjumlah1" placeholder="Jumlah Pemasukan" required="required" step="100" min="100" value="{{ $p->jumlahpemasukan }}">
              </div>
              <div class="form-group">
                <label for="exampleInputketerangan1">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" id="exampleInputketerangan1" placeholder="Keterangan" required="required" value="{{ $p->keterangan }}">
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        @endforeach

@endsection