@extends('layouts.main')

@section('content')
@include('partials.about')

<section id="about-vision-mission">
    <div class="about-vision">
        <div class="text-section-title text-center">Our Vision & Mission</div>
        <div class="text-sub-section-title text-center">
            Vision
        </div>
        <div class="text-center container mb-5">
            <img class="my-3" src="{{ asset('img/sample-image-1.jpg') }}" alt="">
            <p class="text-content-regular-l pb-0">To build a <b>synergized ecosystem</b> in order to <b>improve the soft skill education for high school and college students</b>, as well as becoming a catalyst for youth-led social enterprises and NGOs.</p>
        </div>
    </div>

    <div class="about-mission p-5 bg-dark text-light">
        <div class="text-sub-section-title text-center">
            Mission
        </div>
        <div class="d-flex">
            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-academia-logotype.png') }}" alt="">
                <p class="text-center text-content-light">Democratize soft skills education to all secondary school students through intensive training.</p>
            </div>

            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-consulting-logotype.png') }}" alt="">
                <p class="text-center text-content-light">Train soft skills for college students by consulting methodology through intensive peer learning and consulting projects.</p>
            </div>

            <div class="col d-block text-center">
                <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-incubation-logotype.png') }}" alt="">
                <p class="text-center text-content-light">Catalyse social enterprise and NGO founders through training and providing tailor-made solutions so they can scale and create bigger impact.</p>
            </div>
        </div>
    </div>
</section>

@endsection