@extends('layouts.master')
@section('title', 'About')
@section('content')

<!-- content -->
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">Tetang Dandi, Silahkan dibaca</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ asset('assets/images/about.jpeg')}} );">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                <div class="heading-section">
                    <span class="subheading">Sistem Informasi 2017</span>
                    <h2 class="mb-4">Dandi</h2>
                    <p>
                        Nama saya Dandi. Saya lahir pada 12 Desember 1998 di sebuah kota kecil, orang luar sering menyebutnya 
                        serpihan surga Lebih tepatnya Kabupaten Soppeng, Kecamatan Marioriwawo, dan Desa Watu Toa. Saya dilahirkan 
                        dari keluarga yang cukup bahagia, walaupun saya sendiri telah ditinggalkan oleh Ibu saya, Ibu Saya meninggal
                        dunia semasa saya masih berumur 5 tahun. Namun saya masih mempunyai Bapak, yang membuat saya semangat, dan 
                        termotivasi untuk melakukan hal – hal yang berguna dan juga mencapai cita – cita yang saya inginkan.
                    </p>
                 
                    <p class="year">
                        <span>Umur :</span>
                        <strong class="number" data-number="22">0</strong>
                        <span>Tahun</span>
                    </p>
                </div>

            </div>
        </div>
    </div>
</section>


<!-- END content -->

@endsection





