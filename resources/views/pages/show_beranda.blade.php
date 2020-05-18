@extends('layouts.master')
@section('title', 'Kurma Dandi')
@section('content')

<!-- content -->
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">Informasi, Kurma Lezat, Nikmat dan Menyehatkan</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url({{ url($kurma->img)}} );">
            </div>
            <div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
                <div class="heading-section">
                    <h2 class="mb-4">{{$kurma->negara}}</h2>
                    <div>
                        {!! $kurma->deskripsi !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- END content -->

@endsection





