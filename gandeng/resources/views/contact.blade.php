@extends('layouts.main')

@section('content')

<section id="partnership-registration" class="bg-dark">

<div class="container">
    <div class="row d-flex flex-wrap align-items-center justify-content-center">
        <div class="col text-center">
            <img class="w-75" src="{{ asset("/img/gandeng-logos/gandeng-logogram.png") }}" alt="Gandeng">
        </div>

        <div class="col">
            <div class="box text-light p-5">
                <form action="" class="d-flex flex-column">
                    <div class="text-section-title">GET IN TOUCH WITH US!</div>
                    
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="your full name here ...">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="fullname" placeholder="Your last name here ...">
                            </div>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="Write your e-mail here ...">
                    </div>
                        
                    <div class="mb-3">
                        <label for="Message" class="form-label">Message</label>
                        <select class="form-select" id="Message">
                            <option selected>Choose subject ...</option>
                            <option value="1">Join Gandeng</option>
                            <option value="2">Donors</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="Message" class="form-label">Message</label>
                                <select class="form-select" id="Message">
                                    <option selected>Choose subject ...</option>
                                    <option value="1">Join Gandeng</option>
                                    <option value="2">Donors</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
        
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea type="text" class="form-control" id="description" placeholder="Write your message here ..."></textarea>
                    </div>
        
                    <div class="d-flex justify-content-end">
                        <button class="btn-primary-round">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>

</section>

<section id="program-cta" class="p-5 bg-yellow">
    <div class="container">
        <div class="d-flex justify-content-around align-items-center text-center">
            <div>
                <div id="cta-ready-to">Ready to</div>
                <h1 id="cta-tag" class="mb-4">#DevelopYourself?</h1>
                <p class="text-content-light-l mb-4">Join our program now by clicking the button below!</p>

                <button class="btn-dark-round-outline" onclick="location.href='/';">Register Now</button>
            </div>
            
            <div>
                <img src="{{ asset('img/registernow.png') }}" alt="">
            </div>
        </div>
    </div>
</section>

@endsection