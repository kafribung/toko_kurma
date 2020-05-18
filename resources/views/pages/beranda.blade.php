@extends('layouts.master')
@section('title', 'Beranda')
@section('content')

<!-- content -->



<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">Silahkan Dipilih, Murah Meriah !</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">

        @if (session('msg'))
            <p class="alert alert-info">{{session('msg')}}</p>
        @endif

        @foreach ($kurmas as $kurma)
            
        <div class="row d-flex">
            <div class="col-lg-6 d-flex align-items-stretch ftco-animate">
                <div class="blog-entry d-md-flex">
                    <a href="blog-single.html" class="block-20 img" style="background-image: url({{ url($kurma->img) }} );"></a>
                    <div class="text p-4 bg-light">
                        <div class="meta">
                            <p><span class="fa fa-calendar"></span> {{$kurma->created_at->format('d M y')}}</p>
                        </div>
                        <h3 class="heading mb-3"><a href="/beranda/{{$kurma->slug}}">{{$kurma->negara}}</a></h3>
                        <div>
                            {!! Str::limit($kurma->deskripsi, 200) !!}
                        </div>
                        <a href="/beranda/{{$kurma->slug}}" class="btn-custom">Continue <span class="fa fa-long-arrow-right"></span></a>

                    </div>
                </div>
            </div>
        @endforeach

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END content -->

@endsection





