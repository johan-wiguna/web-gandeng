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
    <div class="m-5">
        <div class="text-center mb-3">
            <div class="text-section-title">Register NOW!</div>
        <p class="text-content-regular">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus exercitationem error vitae? Numquam ipsam quam ullam excepturi nihil temporibus sed facilis voluptate odit. Debitis, et possimus nesciunt facere eveniet vel quidem id amet veritatis, adipisci, nisi nemo neque sapiente sequi!</p>
        </div>
        <div class="box bg-yellow p-5">
            <form action="" class="">
            <div class="text-section-title">Register NOW!</div>
            
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" placeholder="Write your full name here ...">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Write your e-mail here ...">
            </div>
                
            <div class="mb-3">
                <label for="organization" class="form-label">Organization Name</label>
                <input type="text" class="form-control" id="organization" placeholder="Write your organization name here ...">
            </div>

            <div class="mb-3">
                <label for="partnership" class="form-label">Partnership Type:</label>
                <div class="d-flex">
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1">
                        <label class="form-check-label" for="radio1">Program Partnership</label>
                    </div>

                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio2">
                        <label class="form-check-label" for="radio2">Media Partnership</label>
                    </div>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Description (Optional)</label>
                <textarea type="text" class="form-control" id="description" placeholder="Write your description here ..."></textarea>
            </div>

            <div class="mb-3">
                <label for="proposal" class="form-label">Proposal</label>
                <input type="text" class="form-control text-center" id="proposal" placeholder="Upload your proposal here...">

                <div class="imgproposal">
                    <img src="../img/sample-image-4.jpg" for="proposal">
                </div>
                
            </div>
            
            
            </form>
        </div>
        
    </div>
</section>



@endsection