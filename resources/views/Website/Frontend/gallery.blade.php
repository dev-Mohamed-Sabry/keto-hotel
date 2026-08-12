@extends('website.layouts.master')

@section('title', 'Gallery')

@section('content')

    <div class="back_re">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2>Gallery</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->
    <div class="gallery">
        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery1.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery2.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery3.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery4.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery5.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery6.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery7.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery_img">
                        <figure><img src="{{ asset('assets/Website/images/gallery8.jpg') }}" alt="#" /></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end gallery -->

@endsection