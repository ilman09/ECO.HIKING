@extends('layouts.app')

@section('content')

<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            HITUNG KARBON MU
                        </p>
                        <h1 class="header">
                        Hitung<span class="text-green"> Karbon</span> mu Untuk tahu <span class="text-blue">jejak karbon yang kamu</span> keluarkan
                        </h1>
                        <p class="support">
                            <span class="text-green">ECO.HIKING</span> membantu para pendaki indonesia<br> untuk menjaga bumi.
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{asset('images/baner.png')}}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/steppendaki.png')}}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    Kegiatan Alam Bebas
                </p>
                <h2 class="primary-header">
                    Pendakian Atap Borneo Indonesia
                </h2>
                <p class="support">
                    Pendakian ini merupakan salah satu rangkain dalam kegiatan <br> Badan Khusus Pelantikan MAPALA UI yaitu Perjalanan Panjang
                </p>
                <p class="mt-5">
                    <a href="https://mapala.ui.ac.id/2022/08/tim-pendaki-mapala-ui-berhasil-mencapai-puncak-kakam-dalam-misi-pendakian-netral-karbon" target="_blank" class="btn btn-master btn-secondary me-3">
                        Lebih Lanjut
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    Gerakan Peduli Lingkungan
                </p>
                <h2 class="primary-header">
                    Carbon Calculator
                </h2>
                <p class="support">
                    Dalam kegiatan alam bebas terdapat emisi karbon yang <br> dikeluarkan. Mapala UI berinisatif untuk melakukan carbon <br> offsetting pada emisi karbon yang dihasilkan sehingga dibuat <br> aplikasi berupa Carbon Calculator untuk mempermudah <br> perhitungannya.
                </p>
                <p class="mt-5">
                    <a href="{{ route('hitung') }}" target"_blank" class="btn btn-master btn-secondary me-3">
                        Mulai Hitung
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/stepemisi.png')}}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{asset('images/steprantau.png')}}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    Pengabdian Masyarakat
                </p>
                <h2 class="primary-header">
                    Pojok Baca Rantau Malam
                </h2>
                <p class="support">
                    Kondisi pendidikan pada Desa Rantau Malam yang merupakan <br> titik awal pendakian masih cukup memprihatinkan. Melihat dari <br> hal tersebut, Mapala UI berinisitif untuk menambah literasi pada <br> masyarakat yang ada khususnya pada jenjang sekolah dasar.
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Lebih Lanjut
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="banner">
    <div class="row brands">
        <div class="text-center">
            <img src="{{asset('images/disuku.png')}}" alt="">
        </div>
    </div>
</section>
<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <h2 class="primary-header">
                    Apa Kata Mereka Tentang Ekspedisi Ini
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <p class="message">
                                Mentornya keren menyampaikan setiap materinya juga detail dan mudah dipahami.
                            </p>
                            <div class="user">
                                <img src="{{asset('images/priska.png')}}" class="photo rounded-circle" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Priska
                                    </h4>
                                    <p class="role">
                                        PJ Peralatan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <p class="message">
                                Rangkaian perjalanan ini mengajarkan banyak ilmu tentang kehidupan.
                            </p>
                            <div class="user">
                                <img src="{{asset('images/dar.png')}}" class="photo rounded-circle" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Dar
                                    </h4>
                                    <p class="role">
                                        PJ Non Teknis
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <p class="message">
                                Banyak ilmu yang dapat diterapkan dalam perjalanan ini.
                            </p>
                            <div class="user">
                                <img src="{{asset('images/oksa.png')}}" class="photo rounded-circle" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Oksa
                                    </h4>
                                    <p class="role">
                                        PJ Base Komunikasi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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