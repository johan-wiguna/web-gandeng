@extends('layouts.main')

@section('content')
<script defer>
    $('.carousel').carousel({
        pause: "false"
    });
</script>

<div id="home-carousel">
    <div id="carousel-slides" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/welcome-image6.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/welcome-image5.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/welcome-image2.png" class="d-block" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-slides" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carousel-slides" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div id="home-gandeng-identity" class="bg-yellow p-5">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="identity-left">
                <div class="text-section-title mb-4">Who are we?</div>
                <p class="text-justify text-content-light pe-5 pb-0">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus assumenda expedita natus officiis est hic in eos similique cum totam dolore inventore, facilis fugit saepe? Fugiat a assumenda harum vitae quibusdam minus distinctio ullam nesciunt, officia qui mollitia vel velit, ratione culpa, modi necessitatibus? Maiores earum esse quasi, nesciunt illum illo assumenda laborum quis. Cumque ab deleniti dolore accusantium nostrum itaque numquam iure vero enim, aliquam beatae alias officia blanditiis dolorem voluptate nisi tempora, culpa dolores repellat at? Rerum, placeat fugit assumenda vero omnis in minus voluptate eligendi repudiandae. Tenetur, ipsam. Quae iste aspernatur debitis fugit necessitatibus esse voluptatibus rerum?
                </p>
            </div>
            
            <img class="w-25" src="../img/welcome-image3.png" alt="">
        </div>
    </div>
</div>

<div id="home-programs">
    <div class="text-section-title text-center">Our Programs</div>

    <div class="program d-flex">
        <div class="col1 d-block text-center">
            <img class="w-50 align-middle" src="{{ url('img/gandeng-logos/g-academia-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-gac-1">
            <div class="text-sub-section-title text-center mb-3">Benefits</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-gac-1">
            <div class="text-sub-section-title text-center mb-3">Achievements</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>

    <div class="program d-flex">
        <div class="col1 d-block text-center">
            <img class="w-50 align-middle" src="{{ url('img/gandeng-logos/g-consulting-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-gcon-1">
            <div class="text-sub-section-title text-center mb-3">Benefits</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-gcon-1">
            <div class="text-sub-section-title text-center mb-3">Achievements</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>

    <div class="program d-flex">
        <div class="col1 d-block text-center">
            <img class="w-50 align-middle" src="{{ url('img/gandeng-logos/g-incubation-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-ginc-1">
            <div class="text-sub-section-title text-center mb-3">Benefits</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-ginc-1">
            <div class="text-sub-section-title text-center mb-3">Achievements</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>

    <div class="program d-flex">
        <div class="col1 d-block text-center bg-white">
            <img class="w-50 align-middle" src="{{ url('img/gandeng-logos/mentor-hub-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-yellow">
            <div class="text-sub-section-title text-center mb-3">Benefits</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-yellow">
            <div class="text-sub-section-title text-center mb-3">Achievements</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>
</div>

<div id="home-updates">
    <div class="text-section-title text-center">Our Updates</div>

</div>

<div id="home-gallery">
    <div class="bg-dark p-5 d-flex align-items-center justify-content-center">
        
            <div class="text-center text-light">
                <div class="text-section-title mt-0">Meet the team</div>
                <div class="text-content-light mb-5">If you're curious to know more about the people of Gandeng, check out our gallery to acknowledge us better!</div>
                
                <button class="btn-primary-round" onclick="location.href='/gallery';">Go to Gallery</button>
            </div>
            <div class="d-flex justify-content-center">
                <img class="w-75" src="../img/zoom.png" alt="">
            </div>
        
    </div>
</div>
@endsection