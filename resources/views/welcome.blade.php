@extends('template')

@section('title','KasMas')
@section('konten')
            <div class="jumbotron">
        <h1>Selamat datang di KasMas</h1>
        <p>KasMas merupakan sebuah website dalam pengelolaan keuangan Kas Masjid Al-Huda yang ada pada 
        jl. Halmahera Sumbersari Jember. Kasmas dapat membantu pengelolaan keuangan secara transparan 
        tanpa adanya kekhawatiran dalam pengelolaan keuangan masjid Al-Huda,fitur yang disediakan 
        pada website ini ada pengelolaan pemasukan kas masjid,pengelolaan pengeluaran kas,laporan 
        keuangan tiap bulannya.</p>
    </div>

    <div class="contenta">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="asset/dollar.png" alt="..."></a>
                    <div class="caption">
                        <h3>Pemasukan </h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="asset/outcome.png" alt="..."></a>
                    <div class="caption">
                        <h3>Pengeluaran</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="#"><img src="asset/analysis.png" alt="..."></a>
                    <div class="caption">
                        <h3>Laporan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

                
@endsection