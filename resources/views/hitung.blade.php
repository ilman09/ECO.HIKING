@extends('layouts.app')

@section('content')
<section class="input">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12 col-12">
                <img src="{{asset('images/isikalku.png')}}" height="400" class="mb-5" alt=" ">
            </div>
        </div>
    </div>
</section>

<form action="{{route('berhasil_hitung')}}" class="basic-form" >

<button type="submit" class="w-100 btn btn-primary">Hitung Emisi Karbon</button>
<p class="text-center subheader mt-4">
    <img src="{{asset('images/ic_secure.svg')}}" alt=""> Data Anda aman dan terenkripsi.
</p>

<section>
<div class="row copyright">
        <div class="col-lg-12 col-12">
            <p>
                All Rights Reserved. Copyright <span class="text-green">ECO.HIKING</span> by DAR bkp22.
            </p>
        </div>
    </div>
</form>
</section>
@endsection