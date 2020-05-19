@extends('layouts.master')
@section('title', 'Edit Data')
@section('content')

<!-- content -->
<section class="hero-wrap hero-wrap-2" style="background-image: url({{ asset('assets/images/bg_1.jpg') }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <h2 class="mb-0 bread">Silahkan Di isi, Om Dandi !</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 ftco-animate">
                <h3 class="mb-4 billing-heading">Edit Data</h3>
                <form action="/beranda/{{$kurma->id}}" method="POST" enctype="multipart/form-data" class="billing-form">
                    @csrf
                    @method('PUT')
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="negara" class="form-control @error('negara') is-invalid @enderror" placeholder="Negara" autofocus autocomplete="off" value="{{old('negara') ? old('negara') : $kurma->negara }}">

                                @if ($errors->has('negara'))
                                    <p class="alert alert-danger">{{$errors->first('negara')}}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <img src="{{url($kurma->img)}}" alt="Gambar {{$kurma->negara}}" width="200" height="200">
                                <input type="file" name="img" accept="image/*" class="form-control @error('img') is-invalid @enderror" placeholder="Gambar">
                        
                                @error('img')
                                    <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="deskripsi" class="form-control ckeditor @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi">{{old('deskripsi') ? old('deskripsi') : $kurma->deskripsi}}</textarea>
                              
                                @error('deskripsi')
                                    <p class="alert alert-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-warning btn-block">Edit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END -->
            </div>
            <!-- .col-md-8 -->
        </div>
    </div>
</section>
<!-- END content -->

@push('before-script')
<script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create( document.querySelector( '.ckeditor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endpush

@endsection





