@extends('layouts.main')

@section('content')

<section id="partnership-registration">
<div class="row bg-dark ">
    <div class="col d-flex align-items-center justify-content-center">
        <div class="">
            <img src="{{ asset("/img/gandeng-logos/gandeng-logogram.png") }}" alt="Gandeng">
        </div>
        
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

        

</section>

@endsection