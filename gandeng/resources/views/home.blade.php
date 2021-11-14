@extends('layouts.main')

@section('content')
<script defer>
    $('.carousel').carousel({
        pause: "false"
    });
</script>

<section id="home-carousel">
    {{-- Carousel images will be taken from database --}}
    <div id="carousel-slides" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel-slides" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carousel-slides" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel-slides" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/sample-image-1.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/sample-image-2.jpg" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/sample-image-3.jpg" class="d-block" alt="...">
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
</section>

<section id="home-gandeng-identity" class="mb-4">
    <div class="bg-yellow">
        <div class="container py-4 d-flex align-items-center">
            <div class="identity-left">
                <div class="text-section-title">Who are we?</div>
                <p class="text-content-light pe-5 pb-0">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus assumenda expedita natus officiis est hic in eos similique cum totam dolore inventore, facilis fugit saepe? Fugiat a assumenda harum vitae quibusdam minus distinctio ullam nesciunt, officia qui mollitia vel velit, ratione culpa, modi necessitatibus? Maiores earum esse quasi, nesciunt illum illo assumenda laborum quis. Cumque ab deleniti dolore accusantium nostrum itaque numquam iure vero enim, aliquam beatae alias officia blanditiis dolorem voluptate nisi tempora, culpa dolores repellat at? Rerum, placeat fugit assumenda vero omnis in minus voluptate eligendi repudiandae. Tenetur, ipsam. Quae iste aspernatur debitis fugit necessitatibus esse voluptatibus rerum?
                </p>
            </div>
            
            <img class="w-25" src="../img/sample-image-4.jpg" alt="">
        </div>
    </div>
</section>

<section id="home-programs" class="mb-4">
    <div class="text-section-title text-center">Our Programs</div>

    <div class="program d-flex" onclick="location.href='/g-academia';">
        <div class="col1 d-block text-center">
            <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-academia-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-gac-1">
            <div class="text-sub-section-title text-center mb-3">Great Reasons to Join</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-gac-1">
            <div class="text-sub-section-title text-center mb-3">Our Milestones</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>

    <div class="program d-flex" onclick="location.href='/g-consulting';">
        <div class="col1 d-block text-center">
            <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-consulting-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-gcon-1">
            <div class="text-sub-section-title text-center mb-3">Great Reasons to Join</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-gcon-1">
            <div class="text-sub-section-title text-center mb-3">Our Milestones</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>

    <div class="program d-flex" onclick="location.href='/g-incubation';">
        <div class="col1 d-block text-center">
            <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/g-incubation-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-ginc-1">
            <div class="text-sub-section-title text-center mb-3">Great Reasons to Join</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-ginc-1">
            <div class="text-sub-section-title text-center mb-3">Our Milestones</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>

    <div class="program d-flex" onclick="location.href='/mentor-hub';">
        <div class="col1 d-block text-center bg-white">
            <img class="w-50 align-middle" src="{{ asset('img/gandeng-logos/mentor-hub-logotype.png') }}" alt="">
            <p class="text-center text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="col2 bg-yellow">
            <div class="text-sub-section-title text-center mb-3">Great Reasons to Join</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
        <div class="col3 bg-yellow">
            <div class="text-sub-section-title text-center mb-3">Our Milestones</div>
            <ul class="text-content-light">
                <li>Benefit 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, minima!</li>
                <li>Benefit 1 Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique, amet!</li>
                <li>Benefit 1</li>
            </ul>
        </div>
    </div>
</section>

<section id="home-updates" class="mb-4">
    <div class="container">
        <div class="text-section-title text-center">Our Updates</div>

        <div class="text-sub-section-title text-center">Our Instagram</div>
        <p class="text-content-regular text-center">Follow our Instagram for more updates on Gandeng Foundation!</p>
        
        <div class="text-sub-section-title text-center">Upcoming Events</div>
        <p class="text-content-regular text-center">Here are some of our upcoming events at Gandeng Foundation. If you're interested, be sure to add it to your calendar so you don't miss it!</p>
        <div class="container">
        <div id="home-event-container" class="d-flex justify-content-center">
                <div class="custom-card">
                    <div class="card-image">
                        <img class="text-center card-image" src="{{ asset('img/sample-post.png') }}" alt="">
                    </div>
                    
                    <div class="card-content p-4">
                        <div class="event-title text-sub-section-title">Event Title</div>
                        <div class="event-guest">Special Guest: <b>Lorem Ipsum</b></div>
                        <p class="event-excerpt text-content-light">In hac habitasse platea dictumst. Fusce accumsan dui ante. Aliquam sem orci, sodales at mollis eu, ornare et felis.</p>

                        <button class="btn-primary-rect mt-4" onclick="location.href='/event';">Read More</button>
                    </div>
                </div>

                <div class="custom-card">
                    <div class="card-image">
                        <img class="text-center card-image" src="{{ asset('img/sample-image-1.jpg') }}" alt="">
                    </div>
                    <div class="card-content p-4">
                        <div class="event-title text-sub-section-title">Event Title</div>
                        <div class="event-guest">&nbsp;</div>
                        <p class="event-excerpt text-content-light">In hac habitasse platea dictumst. Fusce accumsan dui ante. Aliquam sem orci, sodales at mollis eu, ornare et felis.</p>

                        <button class="btn-primary-rect mt-4" onclick="location.href='/event';">Read More<i class></i></button>
                    </div>
                </div>
            </div>

            <div class="text-center mb-4">
                <a href="/events">See more upcoming events <i class="fas fa-angle-double-right fa-xs"></i></a>
            </div>
        </div>
    </div>
    
    
    
    
</section>

<section id="home-gallery">
    <div class="bg-dark">
        <div id="home-gallery-container" class="container py-4 d-flex align-items-center justify-content-center">
            <div class="text-center text-light mx-2">
                <div class="text-section-title">Meet the team</div>
                <div class="text-content-light mb-5">Meet our hardworking and dedicated team behing Gandeng Foundation through our gallery to know us deeper!</div>
                
                <button class="btn-primary-round" onclick="location.href='/gallery/';">Go to Gallery</button>
            </div>
            <div class="d-flex justify-content-center mx-2">
                <img src="../img/zoom.png" alt="">
            </div>
        </div>
    </div>
    
</section>

<section id="home-partners">
    <div class="bg-yellow ">
        <div class="container text-center py-4">
            <div class="text-section-title">Our Partners</div>
            <div class="text-sub-section-title">You can be our partner, too!</div>
            <p class="text-content-regular">If you're interested in building a partnership with us, do not hesitate to register by clicking the button below.</p>

            <button class="btn-dark-round mt-3" onclick="location.href='/partnership';">Register Now</button>
        </div>
    </div>
</section>

@endsection