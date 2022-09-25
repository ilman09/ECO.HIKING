@extends('layouts.app')

@section('content')
<section class="input">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <h2 class="primary-header">
                    Masukan Data Karbon
                </h2>
            </div>
        </div>
<div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-input">
                            <img src="{{asset('images/baner.png')}}" alt="" class="cover">
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{route('berhasil_hitung')}}" class="basic-form" method="POST">

                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Indikator</label>
                                <select name="#" type="text" class="form-control">
                                    <option value="pilih">Pilih</option>
                                    <option value="laki laki">Transportasi</option>
                                    <option value="perempuan">Makanan</option>
                                    <option value="perempuan">Gas</option>
                                    <option value="perempuan">Tisu</option>
                                    <option value="perempuan">Kemasan</option>
                                    <option value="perempuan">Elektronik</option>
                                    <option value="perempuan">Pembukaan Jalur</option>
                                    <option value="perempuan">Sampah</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Moda Transportasi</label>
                                <select name="# type="text" class="form-control">
                                    <option value="pilih">Pilih</option>
                                    <option value="laki laki">Udara</option>
                                    <option value="perempuan">Darat</option>
                                    <option value="perempuan">Air</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Jenis Transportasi</label>
                                <select name="#" type="text" class="form-control">
                                    <option value="pilih">Pilih</option>
                                    <option value="laki laki">Kapal Laut</option>
                                    <option value="perempuan">Klotok</option>
                                    <option value="perempuan">Speedboat</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Jumlah Penumpang</label>
                                <input name="#" type="number" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label for="exampleInputEmail1" class="form-label">Jarak Tempuh (KM)</label>
                                <input name="#" type="number" class="form-control">
                            </div>

                            <button type="submit" class="w-100 btn btn-save">Simpan</button>
                            <p></p>
                            <button type="submit" class="w-100 btn btn-total">Hitung Total</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{asset('images/ic_secure.svg')}}" alt=""> Data Anda aman dan terenkripsi.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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