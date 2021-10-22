@extends('layouts.main')

@section('content')


<div class="bg-yellow text-center p-5">
    <div class="text-section-title">Want to be our partner?</div>
    <div class="text-sub-section-title">If you are interested to partner with us, please fill out the form or directly email to us </div>
    
</div>
<section id="partners">
    <div class="text-center p-5">
        <div class="text-section-title">Program partnership</div>
        <p class="text-content-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus exercitationem error vitae? Numquam ipsam quam ullam excepturi nihil temporibus sed facilis voluptate odit. Debitis, et possimus nesciunt facere eveniet vel quidem id amet veritatis, adipisci, nisi nemo neque sapiente sequi!</p>
    
        <div class="d-flex justify-content-center">
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
            <div class="logo">
                <img src="{{ asset('../img/sample-image-4.jpg') }}"  alt="">
            </div>
        </div>
    </div>
</section>
<section id="partnership-registration">
    <div class="p-5">
        <div class="text-center">
            <div class="text-section-title">Register NOW!</div>
        <p class="text-content-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus exercitationem error vitae? Numquam ipsam quam ullam excepturi nihil temporibus sed facilis voluptate odit. Debitis, et possimus nesciunt facere eveniet vel quidem id amet veritatis, adipisci, nisi nemo neque sapiente sequi!</p>
        </div>
        <div class="box bg-yellow p-5">
            <form action="" class="bg-yellow p-5">
            <div class="text-section-title">Register NOW!</div>
            <label for="">Full Name</label>
        </form>
        </div>
        
    </div>
</section>



@endsection