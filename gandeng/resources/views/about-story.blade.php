@extends('layouts.main')

@section('content')
@include('partials.about')
<section id="about-journey" class="mb-5">
    <div class="container">
        <div class="d-flex">
            <div>
                <div class="text-section-title">The start of our journey</div>

                <p class="text-content-regular-l">It all started because our founders observed that there was a lack of systematic approach in soft-skill education for children in Indonesia, along with numerous social initiatives, NGO, and social enterprises who find it difficult to be sustainable, for example because of the lack of funding or human resource management strategy.</p>
            </div>
            <div>
                <img src="{{ asset('img/journey.svg') }}" alt="Our journey">
            </div>
        </div>
        
        <br>
        <hr>
        <br>
        <p class="text-content-regular-l text-center">One time, when one of our founders was mentoring a 12-year-old &#8211; trained in soft-skill and hard-skill education, a <b>simple question</b> was raised by her:</p>
        <br>
        <div class="text-center">
            <q class="low-highlight font-montserrat fw-bold fs-3">Why don't you make this for other children?</q>
        </div>
        <br>
        <p class="text-content-regular-l text-center">From that, our founders felt the need to step in and make an ecosystem called <q><b>(G)andeng Foundation</b></q> to help the development of students and early social enterprise/NGO.</p>
    </div>
</section>

<section id="about-logo" class="mb-5">
    <div class="container">
        <div class="cst-card cst-card-content">
            <div class="text-section-title text-center pt-0">The logo</div>

            <div class="d-flex justify-content-center align-items-center">
                <div class="about-logotag-image">
                    <img src="{{ asset("img/gandeng-logos/gandeng-logogram.png") }}" alt="Gandeng logo">
                </div>
                
                <div class="about-logotag-exp">
                    <div class="text-content-regular-l fw-bold font-montserrat text-capitalize">The letter 'G'</div>
                    <div class="text-content-regular mb-2">Represents the initial of "Gandeng Foundation".</div>

                    <div class="text-content-regular-l fw-bold font-montserrat text-capitalize">People holding hands</div>
                    <div class="text-content-regular mb-2">Represents the affection and supports that people of Gandeng give to each other.</div>

                    <div class="text-content-regular-l fw-bold font-montserrat text-capitalize">The lantern</div>
                    <div class="text-content-regular">Represents how the mentors will help guide their mentees, which the light will always follow whoever holds the lantern.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-tagline" class="mb-5">
    <div class="container">
        <div class="cst-card cst-card-content">
            <div class="text-section-title text-center pt-0">The tagline</div>

            <div class="d-flex justify-content-center align-items-center">
                <div class="about-logotag-image">
                    <img src="{{ asset("img/gandeng-logos/gandeng-tagline.png") }}" alt="Gandeng logo">
                </div>
                
                <div class="about-logotag-exp">
                    <div class="text-content-regular">Our simple yet meaningful tagline shows that we believe by joining our hands, we can illuminate and create a bigger impact to grow together as a strong organization.</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection