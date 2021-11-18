@extends('layouts.main')

@section('content')
@include('partials.about')

<section id="about-vision-mission">
    <div class="about-vision p-5">
        <div class="text-section-title text-center">Our Vision & Mission</div>
        <div class="text-sub-section-title text-center">
            Vision
        </div>
        <div class="text-center">
            <img class="my-3" src="{{ asset('img/sample-image-1.jpg') }}" alt="">
            <p class="text-content-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo, vel fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis</p>
        </div>
    </div>

    <div class="about-mission p-5 bg-dark text-light">
        <div class="text-sub-section-title text-center">
            Mission
        </div>
        <div class="d-flex">
            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-academia-logotype.png') }}" alt="">
                <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-consulting-logotype.png') }}" alt="">
                <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-incubation-logotype.png') }}" alt="">
                <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</section>

@endsection