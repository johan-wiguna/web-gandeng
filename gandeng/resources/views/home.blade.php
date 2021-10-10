@extends('layouts.main')

@section('content')
<div id="home-carousel">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/welcome-image1.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/welcome-image2.png" class="d-block" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/welcome-image3.png" class="d-block" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</div>

<div id="home-gandeng-identity">
    <div class="bg-yellow p-5">
        <div class="container">
            <h2 class="text-section-title text-center pb-2">Who Are We?</h2>
            <div class="d-flex align-items-center">
                <p class="text-justify text-content-light pe-5 pb-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus assumenda expedita natus officiis est hic in eos similique cum totam dolore inventore, facilis fugit saepe? Fugiat a assumenda harum vitae quibusdam minus distinctio ullam nesciunt, officia qui mollitia vel velit, ratione culpa, modi necessitatibus? Maiores earum esse quasi, nesciunt illum illo assumenda laborum quis. Cumque ab deleniti dolore accusantium nostrum itaque numquam iure vero enim, aliquam beatae alias officia blanditiis dolorem voluptate nisi tempora, culpa dolores repellat at? Rerum, placeat fugit assumenda vero omnis in minus voluptate eligendi repudiandae. Tenetur, ipsam. Quae iste aspernatur debitis fugit necessitatibus esse voluptatibus rerum?</p>
                <img class="w-25" src="../img/welcome-image3.png" alt="">
            </div>
        </div>
    </div>
</div>

<div id="home-programs">
    <div class="container">
        <h2 class="text-section-title text-left py-3">Our Programs</h2>
    </div>
    <div class="bg-gac-1 p-5">
        <div class="container d-flex ">
            <div class="col1 d-flex-row">
                <img class="w-75" src="../img/welcome-image3.png" alt="">
                <p class="text-justify text-content-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, suscipit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, ut!</p>
            </div>
            <div class="col2">
                <ul>
                    <li>lore</li>
                </ul>
            </div>
            <div class="col3">
                <ul>
                    <li>lore</li>
                </ul>
            </div>

                
            </div>
        </div>
                
        
    </div>
</div>

<div id="home-mentor-hub">

</div>

<div id="home-updates">

</div>
@endsection