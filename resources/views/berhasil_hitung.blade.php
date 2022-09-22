@extends('layouts.app')

@section('content')
<section class="input">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img src="{{asset('images/berhasilhitung.png')}}" height="400" class="mb-5" alt=" ">
            </div>
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <h2 class="primary-header ">
                    Emisi Karbon Berhasil Di Hitung!
                </h2>
                <a href="{{route('welcome')}}" class="btn btn-primary mt-3">
                    Lihat Hasil Perhitungan
                </a>
            </div>
        </div>
    </div>
    <div class="row copyright">
            <div class="col-lg-12 col-12">
                <p>
                    All Rights Reserved. Copyright <span class="text-green">ECO.HIKING</span> by DAR bkp22.
                </p>
            </div>
        </div>
</section>
@endsection